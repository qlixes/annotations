<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

namespace qlixes\annotations;

/**
 * @Annotation
 */
final class Auth
{
  // type member allowed
  public $allowedRoles;
  // did it need auth or not
  public $needAuth;

  public $needSession;
}
