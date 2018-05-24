<?php

namespace App\Helpers\Algorithm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class NaiveBayes
{
  static protected $dataset;
  static protected $cat;
  static protected $category;
  static protected $categories;
  static protected $instanceCategory;
  static protected $element;
  static protected $tableName;
  static protected $features = array();
  static protected $expiresAt;
  static protected $i;
  static protected $feature;

  /**
   * Initializes some global variables and returns the category
   * of the element to be classified.
   *
   * @param [type] $dataset   Data with which the element is to
   *                          be classified.
   * @param [type] $category  Name of the column that contains
   *                          the categories.
   * @param [type] $element   Element to be classified.
   * @param [type] $tableName
   * 
   * @return string           Element category.
   */
  public static function nBayes($dataset, $category, $element, $tableName)
  {
    self::$dataset = $dataset;
    self::$category = $category;
    self::$element = $element;
    self::$tableName = $tableName;
    self::$expiresAt = now()->addYear(1);
    
    NaiveBayes::loadCategotyData();

    return NaiveBayes::classify();
  }

  /**
   * Classifies the global variable element, obtaining its category.
   *
   * @return string Element category.
   */
  public static function classify()
  {
    $instancesByCat = array();
    $featuresProbs = NaiveBayes::calculateProbs();
    
    foreach (self::$categories as $cat) {
      $instancesByCat[$cat] = NaiveBayes::instances($cat);
    }

    $m = count(self::$features)-1;
    $totalProbsCategories = NaiveBayes::calcProbTotal($featuresProbs, $instancesByCat, $m);

    return array_keys($totalProbsCategories, max($totalProbsCategories))[0];
  }

  /**
   * Calculate the probability of each frequency in each class and
   * calculate its product, multiply it by the previous probability of
   * the class, obtaining the total probability of each of the classes.
   *
   * @param [type] $probs           Contains the probabilities of each feature.
   * @param [type] $instancesByCat  Contains the number of records for each of
   *                                the categories.
   * @param [type] $m               Number of features.
   * 
   * @return array $probsClasses    Classes with their probability.
   */
  public static function calcProbTotal($probs, $instancesByCat, $m)
  {
    $probsClasses = array();

    foreach ($instancesByCat as $key => $instances) {
      $productFreq = 1;
      $n = self::$instanceCategory[$key];

      for ($i=0; $i < count($probs)-1; $i++) {
        $productFreq *= ($instances[$i] + $m * $probs[$i]) / ($n + $m);
      }

      $probsClasses[$key] = $productFreq * NaiveBayes::priorProbability($key);
    }

    return $probsClasses;
  }

  /**
   * Assign the value to instanceCategory with the instances or number of
   * appearances of each of the registered categories, and to categories
   * with each of the available categories. instanceCategory and categories
   *  are global variables.
   *
   * @return void
   */
  public static function loadCategotyData()
  {
    $key = 'load_categoty_data_' . self::$tableName . '_' . self::$category;

    $query = Cache::remember($key, self::$expiresAt, function () {
      return DB::table(self::$tableName)
                  ->select(self::$category, DB::raw('count(*) as total'))
                  ->groupBy(self::$category)
                  ->pluck('total', self::$category)->all();
    });

    [$categories] = array_divide($query);
    
    self::$instanceCategory = $query;
    self::$categories = $categories;
  }

  /**
   * Calculates the number of instances that match the value of the
   * feature indicated in a category.
   *
   * @param String $cat
   * 
   * @return array $instances Number of instances of each category of the class.
   */
  public static function instances($cat)
  {
    $instances = array();

    for ($i=0; $i < count(self::$features)-1; $i++) {
      
      $key = 'instances_' . self::$tableName . '_' . last(self::$features) . 
              '_' . self::$features[$i] . '_' . self::$element[$i] . '_' . $cat;
      self::$cat = $cat;
      self::$i = $i;
      
      $instancesNumber = Cache::remember($key, self::$expiresAt, function () {
        return DB::table(self::$tableName)
                    ->where([
                      [self::$features[self::$i], self::$element[self::$i]],
                      [last(self::$features), self::$cat],
                    ])->get()->count();
      });

      array_push($instances, $instancesNumber);
    }

    return $instances;
  }

  /**
   * Calculates the prior probability of the category.
   *
   * @param [type] $category
   * 
   * @return float $probability 
   */
  public static function priorProbability($category)
  {
    $key = 'prior_probability_' . self::$tableName . '_' . self::$category . 
            '_' . $category;
    self::$cat = $category;

    return Cache::remember($key, self::$expiresAt, function () {
      $totalCategoryRecords = DB::table(self::$tableName)
                                  ->where(self::$category, self::$cat)
                                  ->count();
      $totalRecords = DB::table(self::$tableName)->count();

      return $totalCategoryRecords / $totalRecords;
    });
  }

  /**
   * Calculate the probabilities of a value for each of the features.
   * Load the global features variable with the available features
   * for the classification indicated by the global variable tableName.
   *
   * @return array Probabilities of a value for each of the features.
   */
  public static function calculateProbs()
  {
    $probs = array();

    foreach (self::$dataset->first() as $feature => $value) {
      
      self::$feature = $feature;
      $key = 'calculate_probs_' . self::$tableName . '_' . $feature;

      $occurrFeature = Cache::remember($key, self::$expiresAt, function () {
        return DB::table(self::$tableName)
                    ->select(self::$feature)
                    ->distinct()
                    ->get()->count();
      });

      array_push(self::$features, $feature);
      array_push($probs, 1 / $occurrFeature);
    }

    return $probs;
  }
}