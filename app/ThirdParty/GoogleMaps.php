<?php

namespace App\ThirdParty;

class GoogleMaps
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getDirections($origin, $destination, $transit_mode)
    {
        $url = 'https://maps.googleapis.com/maps/api/directions/json?';
        $url .= 'origin=' . urlencode($origin);
        $url .= '&destination=' . urlencode($destination);
        $url .= '&mode=transit';
        $url .= '&transit_mode=' . urlencode($transit_mode);
        $url .= '&language=pt-BR'; 
        $url .= '&key=' . $this->apiKey;

        $response = file_get_contents($url);
        return json_decode($response, true);
    }

    public function getFastDirections($origin, $destination)
    {
        $url = 'https://maps.googleapis.com/maps/api/directions/json?';
        $url .= 'origin=' . urlencode($origin);
        $url .= '&destination=' . urlencode($destination);
        $url .= '&mode=transit';
        $url .= '&language=pt-BR'; 
        $url .= '&key=' . $this->apiKey;

        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}