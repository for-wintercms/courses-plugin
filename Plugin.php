<?php

namespace DS\Courses;

use Backend;
use System\Classes\PluginBase;

/**
 * Courses Plugin Information File
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
            'name'        => 'Courses',
            'description' => 'No description provided yet...',
            'author'      => 'DS',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {}

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {}

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'DS\Courses\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'ds.courses.some_permission' => [
                'tab' => 'Courses',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'courses' => [
                'label'       => 'Courses',
                'url'         => Backend::url('ds/courses/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ds.courses.*'],
                'order'       => 500,
            ],
        ];
    }
}
