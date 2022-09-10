<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnisysValidator extends Controller
{
    public function solidwaste_validator($request){
        $user_access = $request->user_access->toArray();
        if (in_array('SOLIDWASTE EDIT', $user_access)) {
            return true;
        }else{
            return false;
        }
    }
}
