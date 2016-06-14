<?php namespace Teb\Doctorinfo;

use Illuminate\Support\Facades\Log;
use System\Classes\PluginBase;
use BackendAuth;
use Backend;
use Config;
use Event;
use Cache;
use Request;
use App;
use Flash;

/**
 * Doctorinfo Plugin Information File
 * Plugin icon is used with Creative Commons (CC BY 4.0) Licence
 * Icon author: http://pixelkit.com/
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
            'name' => '한의사 소개',
            'description' => '한의사 소개 플러그인',
            'author' => 'jsy',
            'icon' => 'icon-cubes'
        ];
    }

    public function registerComponents()
    {
      return [
        '\Teb\Doctorinfo\Components\DoctorInfo' => 'doctorInfo'
      ];
    }

    public function registerSettings()
    {
        return [
          'test' => [
            'label' => 'teb.doctorinfo::lang.details.title',
            'description' => 'teb.doctorinfo::lang.details.description',
            'category' => 'system::lang.system.categories.cms',
            'icon' => 'icon-cubes',
            'url' => Backend::url('teb/doctorinfo/settings'),
            'order' => 500,
            'keywords' => 'doctor info'
          ]
        ];
    }

}
