<?php

namespace qlixes\annotations;

use qlixes\Annotations\FactoryAnnotate;

/**
 * @Annotation
 * @Target("ALL")
 */
final class Routers extends FactoryAnnotate
{
  /**
  *
  * @var array<string>
  * @Required
  * @ENUM({"GET","POST","PATCH","UPDATE"})
  */
  public $mode = array();

  /**
  * @var string
  * @Required
  * @ENUM({"application/json","application/x-www-form-urlencoded","multipart/form-data"})
  */
  public $contentType;

  /**
  * @var array<mixed>
  * @Required
  */
  public $data = array();

  // jika diinject via constructor : @class("foobar") === @class(value="")
  // jika diinject via associatif array : @class(property1="", property2="")
  public function __construct($options)
  {
    parent::__construct($options);
    $this->mode = $options['mode'];
    $this->contentType = $options['contentType'];
    $this->data = $options['data'];
  }
}
