<?php
/**
 * Freyja Hook Facade.
 *
 * @package Laravel-Freyja-Hook
 * @copyright 2016 SqueezyWeb
 * @since 1.0.0
 */

namespace Freyja\Hook\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Hook Facade.
 *
 * @author Mattia Migliorini <mattia@squeezyweb.com>
 * @author Gianluca Merlo <gianluca@squeezyweb.com>
 * @since 1.0.0
 * @version 1.0.0
 */
class Hook extends Facade {
  /**
   * Get registered name of the component.
   *
   * @since 1.0.0
   * @access protected
   * @static
   *
   * @return string
   */
  protected static function getFacadeAccessor() {
    return 'hook';
  }
}
