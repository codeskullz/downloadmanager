<?php namespace NielsVanDenDries\Downloadmanager\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Files extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'Downloadmanager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Downloadmanager', 'main-menu-item');
    }
}
