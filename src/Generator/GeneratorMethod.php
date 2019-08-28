<?php
  namespace Massfice\AjaxViewResolver\Generator;

  interface GeneratorMethod {
    public function generateView(array $array) : string;
  }
?>
