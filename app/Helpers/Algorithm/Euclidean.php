<?php

namespace App\Helpers\Algorithm;

class Euclidean
{
  /**
   * Performs the Euclidean distance calculation algorithm.
   * 
   * Takes the point of the vectorX and compare it with each of the points of
   * the vectorY to obtain the nearest point and therefore the value of that point.
   * 
   * @param array $vectorX Point to compare the least distance.
   * @param array $vectorY Records to calculate the point closest to the point
   *                       of the vectorX.
   * @return string $result Value of the closest point.
   */
  public static function euclidean($vectorX, $vectorY)
  {
    $sum = 0;
    $min = $result = 1000;

    foreach($vectorY as $current)
    {
      $value = 0;
      $current = Euclidean::getValues($current);

      for($i = count($vectorX) - 1; $i >= 0; $i--)
      {
        $value += pow( (double)$vectorX[$i] - Euclidean::strValue($current[$i]), 2 );
      }

      $value = sqrt($value);

      if($min == 0)
        break;
      else
        if($min > $value) {
          $min = $value;
          $result = end($current);
        }
    }
    return $result;
  }

  /**
   * Get the values of an array or associative collection.
   * 
   * @param array Arrangement or collection to obtain its values.
   * @return array Values of an associative arrangement.
   */
  public static function getValues($collection)
  {
    $collection = (array) $collection;
    [$keys, $values] = array_divide($collection);
    
    return $values;
  }

  /**
   * Gets a numeric value for a string.
   * 
   * @param string String to get its value.
   * @return float/int String's value.
   */
  public static function strValue($string)
  {
    switch ($string)
    {
      case 'F':
        return 1;
        
      case 'M':
        return 2;

      case 'Paraiso':
        return 1;
      
      case 'Turrialba':
        return 2;

      case 'Low':
        return 1;

      case 'Medium':
        return 2;
      
      case 'High':
        return 3;

      case 'CONVERGENTE':
        return 1;

      case 'DIVERGENTE':
        return 2;
      
      case 'ACOMODADOR':
        return 3;
      
      case 'ASIMILADOR':
        return 4;

      default:
        return floatval($string);
    }
  }
}