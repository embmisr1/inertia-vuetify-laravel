<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class TestingController extends Controller
{
    public function testing_route(){
        $lat = 16.632109;
        $long = 120.318676;
        $array = [
            [
                'latitude' => 16.63198017912692, 'longitude' => 120.31869209325409,
            ],
            [
                'latitude' => 16.631971184149986, 'longitude' => 120.31862772023773,
            ],
            [
                'latitude' => 16.6321273111894, 'longitude' => 120.31859955704307,
            ],
            [
                'latitude' => 16.632135342412273, 'longitude' => 120.31866460061168,
            ],
        ];
        Mapper::map($lat, $long, ['cluster'=>false, 'marker'=>false, 'zoom'=>20])
        ->informationWindow(
            $lat, 
            $long, 
            'ABCDEFG', 
            [
                'animation' => 'DROP', 
                'open'=>true, 
            ]
        )
        ->polygon($array, 
        ['strokeColor' => '#DF0000', 'strokeOpacity' => 1, 'strokeWeight' => 2, 'fillColor' => '#FFFFFF'])
        ->marker($lat, $long, ['draggable' => true, 'eventDragEnd' => 'get_coordinate(event.latLng.lat(),event.latLng.lng()); ']);
        return view('universe_map');
    }
}
