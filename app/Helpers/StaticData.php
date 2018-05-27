<?php

namespace App\Helpers;

class StaticData
{
  /**
   * Gets a numeric value for a string.
   * 
   * @param string      String to get its value.
   * @return float/int  String's value.
   */
  public static function strValue($string)
  {
    switch ($string)
    {
      case 'Beginner':
      case 'DM':
      case 'F':
      case 'Paraiso':
      case 'Low':
      case 'L':
      case 'N':
      case 'B':
      case 'CONVERGENTE':
        return 1;
      
      case 'Intermediate':
      case 'ND':
      case 'M':
      case 'I':
      case 'S':
      case 'Turrialba':
      case 'Medium':
      case 'DIVERGENTE':
        return 2;

      case 'Advanced':
      case 'O':
      case 'NA':
      case 'High':
      case 'H':
      case 'A':
      case 'ACOMODADOR':
        return 3;
      
      case 'ASIMILADOR':
        return 4;

      default:
        return floatval($string);
    }
  }
}