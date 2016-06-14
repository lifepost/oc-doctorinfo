<?php namespace Teb\Doctorinfo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;
use Teb\Doctorinfo\Models\Setting;
use Cache;
use Flash;
use Lang;

/**
 * Settings Back-end Controller
 */
class Settings extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Teb.Doctorinfo', 'doctorinfo');
    }

    public function onDelete()
    {
        $selected = post('checked');
        Setting::destroy($selected);
        return $this->listRefresh();
    }

    public function onClearCache()
    {
        Cache::forget('teb_doctorinfo_doctors');
        Flash::success(Lang::get('teb.doctorinfo::lang.flash.cache-clear'));
    }
}

