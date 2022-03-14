<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Position;
use App\Models\UnitSection;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UpdateUsersRequest;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Filters\UsersFilter;
use App\Http\Resources\UsersResource;
use Illuminate\Support\Facades\Cache;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Cache::flush();
        // dd(Cache::has("Users-index-page"));
        return Inertia::render("Pages/users/", [
            'filters' => Request::all('username', 'id', 'position', 'unit_section',),
            // 'users' =>  Cache::remember("Users-index-page", 60, function () {
            //     return UsersResource::collection((new UsersFilter)->get());
            // },)
            'users' => UsersResource::collection((new UsersFilter)->get())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render("Pages/users/create", [
            'data' => array(
                "position" =>  Cache::remember('position_all', 60, function () {
                    return  Position::select('id', 'name')->get();
                }),
                "unit_section" =>  Cache::remember('unit_section_all', 60, function () {
                    return  UnitSection::select('id', 'name')->get();
                })
            )
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        $input = $request->validated();
        $input['password'] = Hash::make($request->password);

        User::create($input);

        return Redirect::back()->with('success', 'User Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, User $user)
    {
        $input = $request->validated();
        $user->update($input);
        return Redirect::back()->with('success', 'User Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return Redirect::back()->with('success', 'User deleted.');
    }
}
