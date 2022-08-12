<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use App\Models\Universe;
use App\Models\MapPolygon;

class UniverseMapController extends Controller
{
    public function universe_map(request $request){
        $universe_FK = $request->universe_FK;
        $query_universe = Universe::find($universe_FK);
        $query_polygon = MapPolygon::where('universe_FK',$universe_FK)->get();

        $universe_data = [
            'query_universe'=>$query_universe,
            'query_polygon'=>$query_polygon,
        ];
        
        $lat = $query_universe->un_lat;
        $long = $query_universe->un_long;
        $poly_array = [];

        foreach($query_polygon as $qry_polygon){
            array_push($poly_array, ['latitude' => $qry_polygon->polygon_latitude, 'longitude' => $qry_polygon->polygon_longitude,]);
        }

        Mapper::map($lat, $long, ['cluster'=>false, 'marker'=>false, 'zoom'=>20])
        ->informationWindow(
            $lat, 
            $long, 
            $query_universe->un_firmname, 
            [
                'animation' => 'DROP', 
                'open'=>true, 
            ]
        )
        ->polygon($poly_array, 
        ['strokeColor' => '#DF0000', 'strokeOpacity' => 1, 'strokeWeight' => 2, 'fillColor' => '#FFFFFF'])
        ->marker($lat, $long, ['draggable' => true, 'eventDragEnd' => 'get_coordinate(event.latLng.lat(),event.latLng.lng()); ']);
        return view('universe_map', $universe_data);
    }

    public function universe_polygon(request $request){
        $universe_FK = $request->universe_FK;
        $query_delete_polygon = MapPolygon::where('universe_FK',$universe_FK);
        $query_delete_polygon->delete();
        if($request->polygon_latitude){
            foreach($request->polygon_latitude as $key => $polygon_array){
                if($request->polygon_latitude[$key]){
                    $query = new MapPolygon();
                    $query->polygon_latitude = $request->polygon_latitude[$key];
                    $query->polygon_longitude = $request->polygon_longitude[$key];
                    $query->universe_FK = $universe_FK;
                    $query->save();
                }
            }
        }
        return back();
    }
}
