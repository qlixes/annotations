<?php

namespace \qlixes\annotations;

/**
* @Annotation
*/
class FactoryAnnotate
{
  protected $constructor

  public function __construct($options)
  {
    $this->constructor = $options['value'];
  }

  public function getConstructor()
  {
    return $this->constructor;
  }
}
