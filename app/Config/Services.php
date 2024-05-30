<?php

namespace Config;

use CodeIgniter\Config\BaseService;

class Services extends BaseService
{
    public $classmap = [
        'GoogleMaps' => APPPATH.'ThirdParty/GoogleMaps.php',
    ];
}