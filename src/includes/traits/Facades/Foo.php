<?php
/**
 * Foo (example).
 *
 * @author @wpsharks
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\Skeleton\Pro\Traits\Facades;

use WebSharks\WpSharks\Skeleton\Pro\Classes;
use WebSharks\WpSharks\Skeleton\Pro\Interfaces;
use WebSharks\WpSharks\Skeleton\Pro\Traits;
#
use WebSharks\WpSharks\Skeleton\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\Skeleton\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\Skeleton\Pro\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Foo (example).
 *
 * @since 000000
 */
trait Foo
{
    /**
     * @since 000000 Foo example.
     *
     * @param mixed ...$args Variadic args to underlying utility.
     *
     * @see Classes\Utils\Foo::__invoke()
     */
    public static function foo()
    {
        return $GLOBALS[static::class]->Utils->Foo->__invoke();
    }
}