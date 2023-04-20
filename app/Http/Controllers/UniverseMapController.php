<?php

namespace App\Http\Controllers;

use App\Http\Resources\Polygon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use App\Models\Universe;
use App\Models\MapPolygon;
use Inertia\Inertia;

class UniverseMapController extends Controller
{
    public function universe_map(request $request)
    {
        $universe_FK = $request->universe_FK;
        $query_universe = Universe::find($universe_FK);
        $query_polygon = MapPolygon::select("id","polygon_latitude", "polygon_longitude")->where('universe_FK', $universe_FK)->get();


        $universe_data = [
            'query_universe' => $query_universe,
            // 'query_polygon' => Polygon::collection($query_polygon),
            'query_polygon' => $query_polygon,
        ];

        $lat = $query_universe->un_lat;
        $long = $query_universe->un_long;
        $poly_array = [];

        foreach ($query_polygon as $qry_polygon) {
            array_push($poly_array, ['latitude' => $qry_polygon->polygon_latitude, 'longitude' => $qry_polygon->polygon_longitude,]);
        }

        Mapper::map($lat, $long, ['cluster' => false, 'marker' => false, 'zoom' => 20])
            ->informationWindow(
                $lat,
                $long,
                $query_universe->un_firmname,
                [
                    'animation' => 'DROP',
                    'open' => true,
                ]
            )
            ->polygon(
                $poly_array,
                ['strokeColor' => '#DF0000', 'strokeOpacity' => 1, 'strokeWeight' => 2, 'fillColor' => '#FFFFFF']
            )
            ->marker($lat, $long, ['draggable' => true, 'eventDragEnd' => 'get_coordinate(event.latLng.lat(),event.latLng.lng()); ']);
        return view('universe_map', $universe_data);
        return  Inertia::render("pages/universe/imthemap.vue", [
            "data" => $universe_data
        ]);
    }


    public function universe_polygon(request $request)
    {
        $universe_FK = $request->universe_FK;
        $query_delete_polygon = MapPolygon::where('universe_FK', $universe_FK);
        $query_delete_polygon->delete();
        if ($request->polygon_latitude) {
            foreach ($request->polygon_latitude as $key => $polygon_array) {
                if ($request->polygon_latitude[$key]) {
                    // $query = new MapPolygon();
                    // $query->polygon_latitude = $request->polygon_latitude[$key];
                    // $query->polygon_longitude = $request->polygon_longitude[$key];
                    // $query->universe_FK = $universe_FK;
                    // $query->save();
                    echo $request->polygon_latitude[$key];
                }
            }
        }
        // return back();
    }


    public function imthemap(request $request)
    {
        $universe_FK = $request->universe_FK;
        $query_universe = Universe::find($universe_FK);
        $query_polygon = MapPolygon::select("id","polygon_latitude", "polygon_longitude")->where('universe_FK', $universe_FK)->get();


        $universe_data = [
            'query_universe' => $query_universe,
            'query_polygon' => Polygon::collection($query_polygon),
        ];

        $lat = $query_universe->un_lat;
        $long = $query_universe->un_long;
        $poly_array = [];

        foreach ($query_polygon as $qry_polygon) {
            array_push($poly_array, ['latitude' => $qry_polygon->polygon_latitude, 'longitude' => $qry_polygon->polygon_longitude,]);
        }

        Mapper::map($lat, $long, ['cluster' => false, 'marker' => false, 'zoom' => 20])
            ->informationWindow(
                $lat,
                $long,
                $query_universe->un_firmname,
                [
                    'animation' => 'DROP',
                    'open' => true,
                ]
            )
            ->polygon(
                $poly_array,
                ['strokeColor' => '#DF0000', 'strokeOpacity' => 1, 'strokeWeight' => 2, 'fillColor' => '#FFFFFF']
            )
            ->marker($lat, $long, ['draggable' => true, 'eventDragEnd' => 'get_coordinate(event.latLng.lat(),event.latLng.lng()); ']);
        return  Inertia::render("pages/universe/imthemap.vue", [
            "data" => $universe_data
        ]);
    }

    public function savePolygon(request $request)
    {
        try {
            $universe_FK = $request->universe_FK;
            $items = collect($request->path);
            MapPolygon::where('universe_FK', $universe_FK)->get()->each(function ($pinned) {
                $pinned->delete();
            });
            $items->each(function ($coord) use ($universe_FK) {
                MapPolygon::create([
                    "polygon_latitude" => $coord['lat'],
                    "polygon_longitude" => $coord['lng'],
                    "universe_FK" => $universe_FK
                ]);
            });
            return back()->with("message", "Coordinates Saved Failed Successfully");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => $th->getMessage()]);
        }
    }
    public function delete_pin(MapPolygon $mapPolygon)
    {
        try {
            $mapPolygon->delete();
            return back()->with("message", "Coordinates Deleted and Failed Successfully");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => $th->getMessage()]);
        }
    }
}
