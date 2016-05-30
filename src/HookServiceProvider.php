<?php
/**
 * Freyja Hook Service Provider.
 *
 * @package Laravel-Freyja-Hook
 * @copyright 2016 SqueezyWeb
 * @since 1.0.0
 */

namespace Freyja\Hook;

use Illuminate\Support\ServiceProvider;
use Blade;

/**
 * Hook Service Provider.
 *
 * @author Mattia Migliorini <mattia@squeezyweb.com>
 * @author Gianluca Merlo <gianluca@squeezyweb.com>
 * @since 1.0.0
 * @version 1.0.0
 */
class HookServiceProvider extends ServiceProvider {
  /**
   * Bootstrap Hook Service Provider.
   *
   * @since 1.0.0
   * @access public
   */
  public function boot() {
    // Add Blade directive for Hook.
    // TODO: Add Blade directive for hook.
  }

  /**
   * Register Hook singleton.
   *
   * @since 1.0.0
   * @access public
   */
  public function register() {
    // TODO: register Hook singleton.
  }
}
