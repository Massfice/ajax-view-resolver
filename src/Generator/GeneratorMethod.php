<?php
  namespace Massfice\SelectingViewResolver\Generator;
  
  interface GeneratorMethod {
    public function generateView(array $array) : string;
  }
?>
