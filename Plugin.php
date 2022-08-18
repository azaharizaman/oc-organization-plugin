<?php namespace AzahariZaman\Organization;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Organization',
            'description' => 'Plugin to manage multiple companies setup in multi-hieraarchical structure.',
            'author'      => 'Azahari Zaman',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'AzahariZaman\Organization\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'azaharizaman.organization.some_permission' => [
                'tab' => 'Organization',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers backend navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'organization' => [
                'label'       => 'Organization',
                'url'         => Backend::url('azaharizaman/organization/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['azaharizaman.organization.*'],
                'order'       => 500,
            ],
        ];
    }
}
