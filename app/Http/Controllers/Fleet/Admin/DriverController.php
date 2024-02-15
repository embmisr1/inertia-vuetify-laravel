<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Filters\UsersFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\DriverRequest;
use App\Http\Resources\UsersResource;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fleet\Driver;
use App\Models\USER_ACCESS\UsersAccess;

class DriverController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 11 - 12
        // return UsersAccess::query()
        //     ->where('access_role_assigned', 'like', '%11%')
        //     ->orWhere('access_role_assigned', 'like', '%12%')
        // ->get();
        return UsersResource::collection((new UsersFilter)->get());

    }

    public function store(DriverRequest $request){
        try {
            $input = $request->validated();
            $newItem = Driver::create($input);
            return response()->json([
                "data"=>$newItem,
                "message"=>"Added Successfully"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(DriverRequest $request, Driver $driver){
        try {
            $input = $request->validated();
            $driver->update($input);
            return response()->json([
                "data"=>$driver,
                "message"=>"Updated Successfully"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
