<?php

namespace App\Http\Controllers\Fleet\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request as NativeRequest;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;


class RequestController extends Controller
{
    public function index()
    {
        // return UsersResource::collection((new UsersFilter)->get());
        // Cache::flush();
        // dd(Cache::has("Users-index-page"));
        return Inertia::render("pages/chauffeur/", [
            'filters' => Request::all('username', 'id', 'position', 'unit_section',),
            // 'users' =>  Cache::remember("Users-index-page", 60, function () {
            //     return UsersResource::collection((new UsersFilter)->get());
            // },)
        ]);
    }
}
