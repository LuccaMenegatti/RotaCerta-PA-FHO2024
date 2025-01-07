<?php 

namespace Config; 

use CodeIgniter\Config\BaseConfig; 

class GoogleMapsConfig extends BaseConfig 
{ 
    public $googleMapsApiKey = 'SUA CHAVE DA API';
    public function getInitScriptUrl(): string 
    { 
        return "https://maps.googleapis.com/maps/api/js?key={$this->googleMapsApiKey}&callback=initMap"; 
    } 
    
    public function getPlaceScriptUrl(): string 
    { 
        return "https://maps.googleapis.com/maps/api/js?key={$this->googleMapsApiKey}&libraries=places"; 
    }
}