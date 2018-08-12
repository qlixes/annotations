<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

namespace qlixes\annotations;

/**
 * @Annotation
 */
final class Role
{
  // usually user access
  public $access;
  // addons for emergency access once
  public $granted;
}
