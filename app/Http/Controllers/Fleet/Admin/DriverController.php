<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Filters\DriversFilter;
use App\Filters\UsersFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\DriverRequest;
use App\Http\Resources\Fleet\DriverResources;
use App\Http\Resources\UsersResource;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fleet\Driver;
use App\Models\USER_ACCESS\UsersAccess;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DriverController extends Controller
{
    /**
     * getting the drivers from the unisys users table
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
        return DriverResources::collection((new DriversFilter)->get());
        // return response()->json(((new DriversFilter)->get()));

    }

    /**
     * get the default driver of the vehicle and original designation
     */
    public function getDriversWithVehicles()
    {
        try {
            $query = Driver::query()
                ->with(['vehicle', 'user'])
                // ->with('mysql.user')

                ->where('isOfficial', true)
                ->get();

            return response()->json([
                "data" => $query
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getDriverAssignedWith()
    {
        try {

            // dd(request('request_section'));
            $query = Driver::query()
                ->with(['vehicle', 'user'])
                // ->with('mysql.user')
                ->where('assigned_to', 'like', '%' . request('request_section') . '%')
                ->where('isOfficial', true)
                ->firstOrFail();
            $data = collect($query);
            $data['assigned_to'] = json_decode($data['assigned_to']);
            $data['assigned_to_human_readable'] = implode(', ', $data['assigned_to']);
            return response()->json([
                "data" => $data
            ]);
        } catch (ModelNotFoundException  $th) {
            return response()->json([
                "data"=>array(
                    "message"=>$th->getMessage()
                ),
                "message"=>$th->getMessage()
            ]
            );
        }
    }

    public function store(DriverRequest $request)
    {
        try {
            $input = $request->validated();
            $newItem = Driver::create($input);
            return response()->json([
                "data" => $newItem,
                "message" => "Added Successfully"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($driver)
    {

        $query = Driver::query()
            ->with(['vehicle', 'user'])
            // ->with('mysql.user')
            ->where('id', $driver)
            // ->where('isOfficial', false)
            ->firstOrFail();

        return response()->json([
            "data" => $query
        ]);
        // return new DriverResources($driver);
    }

    public function update(DriverRequest $request, Driver $driver)
    {
        try {
            $input = $request->validated();
            $driver->update($input);
            return response()->json([
                "data" => $driver,
                "message" => "Updated Successfully"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
