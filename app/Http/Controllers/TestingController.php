<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TestingController extends Controller
{
    public function testing_route(){
        $a = ['1','2','3','4','5'];
        $b = json_encode($a);
        $c = json_decode($b);
        // echo $b;
        dd($c);
    }
}
