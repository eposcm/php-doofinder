<?php

namespace Doofinder\Api\Custom;

class Polyfill
{
  /**
   * @return array|false
   */
  public static function each(array &$array)
  {
    $key = key($array);
    $value = current($array);

    if ($key === null) {
      return false;
    }

    next($array);

    return [
      1 => $value,
      'value' => $value,
      0 => $key,
      'key' => $key
    ];
  }
}