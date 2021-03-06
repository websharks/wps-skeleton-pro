<?php
/**
 * Application.
 *
 * @author @wpsharks
 * @copyright WP Sharks™
 */
declare(strict_types=1);
namespace WebSharks\WpSharks\Skeleton\Pro\Classes;

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
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes\Core\Error;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Application.
 *
 * @since $%v Initial release.
 */
class App extends SCoreClasses\App
{
    /**
     * Version.
     *
     * @since $%v
     *
     * @type string Version.
     */
    const VERSION = '170912.50827'; //v//

    /**
     * Constructor.
     *
     * @since $%v Initial release.
     *
     * @param array $instance Instance args.
     */
    public function __construct(array $instance = [])
    {
        $Core = $GLOBALS[SCoreClasses\App::class];

        $instance_base = [
            '©di' => [
                '©default_rule' => [
                    'new_instances' => [],
                ],
            ],

            '§specs' => [
                '§in_wp'           => false,
                '§is_network_wide' => false,

                '§type'            => 'plugin',
                '§file'            => dirname(__FILE__, 4).'/plugin.php',
            ],
            '©brand' => [
                /*
                    '©acronym'     => '',
                    '©name'        => '',

                    '©slug'        => '',
                    '©var'         => '',

                    '©short_slug'  => '',
                    '©short_var'   => '',

                    '©text_domain' => '',
                */
            ],

            '§pro_option_keys' => [],
            '§default_options' => [],

            '§conflicts' => [
                '§plugins' => [
                    /*
                        '[slug]'  => '[name]',
                    */
                ],
                '§themes' => [
                    /*
                        '[slug]'  => '[name]',
                    */
                ],
                '§deactivatable_plugins' => [
                    /*
                        '[slug]'  => '[name]',
                    */
                ],
            ],
            '§dependencies' => [
                '§plugins' => [
                    /*
                        '[slug]' => [
                            'name'        => '',
                            'url'         => '',
                            'archive_url' => '',
                            'in_wp'       => true,
                            'test'        => function(string $slug) {},

                            A test function is optional.
                            A successful test must return nothing.
                            A failed test must return an array with:
                                - `reason`      = One of: `needs-upgrade|needs-downgrade`.
                                - `min_version` = Min version, if `reason=needs-upgrade`.
                                - `max_version` = Max version, if `reason=needs-downgrade`.
                        ],
                    */
                ],
                '§themes' => [
                    /*
                        '[slug]' => [
                            'name'        => '',
                            'url'         => '',
                            'archive_url' => '',
                            'in_wp'       => true,
                            'test'        => function(string $slug) {},

                            A test function is optional.
                            A successful test must return nothing.
                            A failed test must return an array with:
                                - `reason`      = One of: `needs-upgrade|needs-downgrade`.
                                - `min_version` = Min version, if `reason=needs-upgrade`.
                                - `max_version` = Max version, if `reason=needs-downgrade`.
                        ],
                    */
                ],
                '§others' => [
                    /*
                        '[arbitrary key]' => [
                            'name'        => '', // Short plain-text name; i.e., '[name]' Required
                            'description' => '', // Brief rich-text description; i.e., It requires [description].
                            'test'        => function(string $key) {},

                            A test function is required.
                            A successful test must return nothing.
                            A failed test must return an array with:
                                - `how_to_resolve` = Brief rich-text description; i.e., → To resolve, [how_to_resolve].
                                - `cap_to_resolve` = Cap required to satisfy; e.g., `manage_options`.
                        ],
                    */
                ],
            ],
        ];
        parent::__construct($instance_base, $instance);
    }

    /**
     * Early hook setup handler.
     *
     * @since $%v Initial release.
     */
    protected function onSetupEarlyHooks()
    {
        parent::onSetupEarlyHooks();

        s::addAction('vs_upgrades', [$this->Utils->Installer, 'onVsUpgrades']);
        s::addAction('other_install_routines', [$this->Utils->Installer, 'onOtherInstallRoutines']);
        s::addAction('other_uninstall_routines', [$this->Utils->Uninstaller, 'onOtherUninstallRoutines']);
    }

    /**
     * Other hook setup handler.
     *
     * @since $%v Initial release.
     */
    protected function onSetupOtherHooks()
    {
        parent::onSetupOtherHooks();

        // if ($this->Wp->is_admin) {
        // Uncomment to enable a default menu page template.
            // add_action('admin_menu', [$this->Utils->MenuPage, 'onAdminMenu']);
        // }
    }
}
