<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TestingController extends Controller
{
    public function testing_route(){
        // Auth::logout();
        Auth::logoutOtherDevices('password');
    }
}
