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
            'description' => 'Courses plugin',
            'author'      => 'DS',
            'icon'        => 'icon-leaf'
        ];
    }
}
