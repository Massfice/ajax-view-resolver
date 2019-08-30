<?php
  namespace Massfice\SelectingViewResolver\Comparator;
  
  interface ComparatorMethod {
    public function makeCompare(string $seed, string $prev) : array;
  }
?>
