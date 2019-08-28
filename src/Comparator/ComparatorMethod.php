<?php
  namespace Massfice\AjaxViewResolver\Comparator;

  interface ComparatorMethod {
    public function makeCompare(string $seed, string $prev) : array;
  }
?>
