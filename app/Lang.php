<?php

class Lang
{

  public static function get($value)
  {
    $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'pt';
    $string = require 'i18n/' . $lang . '.php';
    return $string[$value];
  }
}
?>