<?php

namespace qlixes\annotations;

/**
* @Annotation
*/
class FactoryAnnotate
{
  public $constructor

  public function __construct($options)
  {
    $this->constructor = $options['value'];
  }

  public function getConstructor()
  {
    return $this->constructor;
  }
}
