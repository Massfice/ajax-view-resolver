<?php
  namespace Massfice\SelectingViewResolver;

  use Massfice\SessionUtils\SessionUtils;

  class SelectingViewResolver {

    public function resolve(
      string $seed,
      \Massfice\AjaxViewResolver\Generator\GeneratorMethod $generate,
      \Massfice\AjaxViewResolver\Comparator\ComparatorMethod $compare
    ) : string {

      $prev = SessionUtils::advancedLoad('selecting_view_resolver_shelf','prev');

      if($prev === null) $prev = '';

      $array = $compare->makeCompare($seed,$prev);

      SessionUtils::advancedStore('selecting_view_resolver_shelf','prev',$seed,true);

      return $generate->generateView($array);
    }

  }
?>
