<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

namespace qlixes\annotations;

use qlixes\Annotations\FactoryAnnotate;

/**
 * @Annotation
 * @target("ALL")
 */
final class Roles extends FactoryAnnotate
{
  /**
  * @var array<string>
  * @Required
  * @ENUM({"root","superuser","manager","supervisor","backoffice","admin","marketing","member","client"})
  */
  public $access;

  public $granted;
}
