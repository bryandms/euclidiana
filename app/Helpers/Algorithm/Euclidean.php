<?php

namespace App\Helpers\Algorithm;

use App\Helpers\StaticData;

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
    $min = $result = 1000;

    foreach($vectorY as $current)
    {
      $value = 0;
      $current = array_values((array) $current);

      for($i = count($vectorX) - 1; $i >= 0; $i--)
      {
        $value += pow( StaticData::strValue($vectorX[$i]) - StaticData::strValue($current[$i]), 2 );
      }

      $value = sqrt($value);

      if($min == 0)
        return end($current);
      else
        if($min > $value) {
          $min = $value;
          $result = end($current);
        }
    }
    return $result;
  }
}