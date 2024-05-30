<?php

namespace App\Controllers;

use App\Config\GoogleMapsConfig;
use App\ThirdParty\GoogleMaps;

class MapController extends BaseController

{
    public function index(): string
    {
        return view('map');
    }

    public function calcularRota()
    {
        $googleMapsConfig = config('GoogleMapsConfig');
        $googleMapsInitScriptUrl = $googleMapsConfig->getInitScriptUrl();
        $apiKey = $googleMapsConfig->googleMapsApiKey;
        $googleMaps = new GoogleMaps($apiKey);

        $origin = $this->request->getVar('origem');
        $destination = $this->request->getVar('destino');
        $transit_mode = $this->request->getPost('transit_mode');

        if (empty($origin) || empty($destination)) {
            return view('home', [
                'error_message' => 'Por favor, preencha os campos origem e destino.'
            ]);
        } 

        if($transit_mode == 'fast'){
            $directions = $googleMaps->getFastDirections($origin, $destination);
        } else{
            $directions = $googleMaps->getDirections($origin, $destination, $transit_mode);
        }

        if ($directions['status'] != 'OK') {
            $route_found = false;
            $error_message = 'Desculpe, não foi possível calcular uma rota de transporte público para o seu destino.';
            return view('home', compact('error_message', 'route_found'));
        }

        $departureStops = [];
        $arrivalStops = [];
        $departureTimes = [];
        $arrivalTimes = [];
        $lines = [];
        $numStops = [];

        foreach ($directions['routes'][0]['legs'][0]['steps'] as $step)
        {
            if (isset($step['transit_details']))
            {
                $departureStops[] = $step['transit_details']['departure_stop']['name'];
                $arrivalStops[] = $step['transit_details']['arrival_stop']['name'];
                $departureTimes[] = $step['transit_details']['departure_time']['text'];
                $arrivalTimes[] = $step['transit_details']['arrival_time']['text'];
                $lines[] = $step['transit_details']['line']['name'];
                $numStops[] = $step['transit_details']['num_stops'];
            }
        }

        $duration = $directions['routes'][0]['legs'][0]['duration']['text'];
        $distance = $directions['routes'][0]['legs'][0]['distance']['text'];

        return view('map', [
            'googleMapsInitScriptUrl' => $googleMapsInitScriptUrl,
            'directions' => $directions,
            'duration' => $duration,
            'distance' => $distance,
            'transit_mode' => $transit_mode,
            'departureStops' => $departureStops,
            'arrivalStops' => $arrivalStops,
            'departureTimes' => $departureTimes,
            'arrivalTimes' => $arrivalTimes,
            'lines' => $lines,
            'numStops' => $numStops,
        ]);
    }
}