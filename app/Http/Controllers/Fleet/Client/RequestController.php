<?php

namespace App\Http\Controllers\Fleet\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\RequestVehicle;
use App\Http\Resources\Fleet\RequestVehicleResource;
use Illuminate\Http\Request as NativeRequest;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use App\Models\Fleet\Request as RequestModel;


class RequestController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->username);
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

    public function store(RequestVehicle $request)
    {
        try {
            $input = $request->validated();
            // $input['requestedBy'] = auth()->user()->username;
            $input['requestedBy'] = auth()->id();
            $new_request = RequestModel::create($input);

            return redirect()->route("chauffeur")->with("message", "Vehicle request Submitted");
        } catch (\Exception $th) {
            throw $th;
        }
    }

    public function show(RequestModel $requestModel)
    {
        try {
            return new RequestVehicleResource ($requestModel);
        } catch (\Exception $th) {
            throw $th;
        }
    }


    public function update(RequestVehicle $request, RequestModel $requestModel)
    {
        try {
            $input = $request->validated();
            $requestModel->update($input);
            return redirect()->route("chauffeur")->with("message", "Vehicle request Updated");
        } catch (\Exception $th) {
            throw $th;
        }
    }

    public function destroy(RequestModel $requestModel)
    {
        try {
            $requestModel->delete();
            return redirect()->route("chauffeur")->with("message", "Vehicle request Deleted");
        } catch (\Exception $th) {
            throw $th;
        }
    }
}
