<?php
  namespace Massfice\AjaxViewResolver;

  use Massfice\Storage\ShelfBuilder;

  class AjaxViewResolver {

    public function resolve(
      string $seed,
      \Massfice\AjaxViewResolver\Generator\GeneratorMethod $generate,
      \Massfice\AjaxViewResolver\Comparator\ComparatorMethod $compare
    ) : string {

      $shelf = ShelfBuilder::getBuilder()
        ->setSessionAllowed(true)
        ->setOverrideSessionAllowed(true)
        ->load(sha1('ajax_view_resolver_prev_shelf'));

      $prev = $shelf->getData(sha1('ajax_view_resolver_prev_data'));

      if($prev === null) $prev = '';

      $array = $compare->makeCompare($seed,$prev);

      $shelf->addData(sha1('ajax_view_resolver_prev_data'),$seed,true);
      $shelf->storeSession(sha1('ajax_view_resolver_prev_shelf'),true);

      return $generate->generateView($array);
    }

  }
?>
