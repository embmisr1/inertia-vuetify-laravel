<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UniverseController extends Controller
{
    public function universe_list(){
        return Inertia::render("pages/universe/universe_list", [
            // 'filters' => Request::all('username', 'id', 'position', 'unit_section',),
            // 'users' =>  Cache::remember("Users-index-page", 60, function () {
            //     return UsersResource::collection((new UsersFilter)->get());
            // },)
            // 'users' => UsersResource::collection((new UsersFilter)->get())
        ]);
    }
}
