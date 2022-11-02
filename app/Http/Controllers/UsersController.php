<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Position;
use App\Models\UnitSection;
use Illuminate\Http\Request as NativeRequest;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UpdateUsersRequest;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Filters\UsersFilter;
use App\Http\Controllers\USER_CONTROLLER\UsersAccessController;
use App\Http\Resources\UsersResource;
use App\Jobs\ProcessAccessRoleCaching;
use App\Models\USER_ACCESS\UsersAccess;
use App\Models\USER_ACCESS\UsersAccessRole;
use App\Models\USER_ACCESS\UsersAccessTemplate;
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
        return Inertia::render("pages/users/", [
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
        // $access_controller = new UsersAccessController(request());

        // $access_controller->create();

        $query_access_template =  UsersAccessTemplate::all();
        $query_access_role =  UsersAccessRole::all();

        return Inertia::render("pages/users/create", [
            'data' => array(
                "position" =>  Cache::remember('position_all', 60, function () {
                    return  Position::select('id', 'name')->get();
                }),
                "unit_section" =>  Cache::remember('unit_section_all', 60, function () {
                    return  UnitSection::select('id', 'name')->get();
                }),
                "user" => array("data" => null),
                "query_access_template" => $query_access_template,
                "query_access_role" => $query_access_role,
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
        try {

            $input = $request->validated();
            $assign_role = $request->selected_roles;
            $input['password'] = Hash::make(env("DEFAULT_USER_PASSWORD","password"));
            $user = User::create($input);
            $assign_role = new UsersAccess();
            $assign_role->access_role_assigned = json_encode($assign_role);
            $assign_role->users_FK = $user->id;
            $assign_role->save();
            return redirect()->route("users")->with("message", "User Created");
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->withErrors(["error_message" => "Form Error"]);
        }
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
    public function edit(User $user)
    {

        $query_access_template =  UsersAccessTemplate::all();
        $query_access_role =  UsersAccessRole::all();
        return Inertia::render("pages/users/create", [
            'data' => array(
                "position" =>  Cache::remember('position_all', 60, function () {
                    return  Position::select('id', 'name')->get();
                }),
                "unit_section" =>  Cache::remember('unit_section_all', 60, function () {
                    return  UnitSection::select('id', 'name')->get();
                }),
                "user" => new UsersResource($user),
                "query_access_template" => $query_access_template,
                "query_access_role" => $query_access_role,
            )
        ]);
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
        try {
            $input = $request->validated();
            $role_assigned = $request->selected_roles;
            $user->update($input);
            $assign_role = UsersAccess::where("users_FK", $user->id)->firstOrFail();
            $assign_role->access_role_assigned = json_encode($role_assigned);
            $assign_role->save();
            ProcessAccessRoleCaching::dispatch($user, json_encode($role_assigned));
            return back()->with('message', 'User Updated Successfully.');
        } catch (\Throwable $th) {
            $assign_role = new UsersAccess();
            $assign_role->access_role_assigned = json_encode($request->selected_roles);
            $assign_role->users_FK = $user->id;
            $assign_role->save();
            ProcessAccessRoleCaching::dispatchAfterResponse($user, json_encode($role_assigned));
            return back()->with("message", "User Role Successfully Added");
            // return Redirect::back()->with('success', 'User Role Successfully Added.');
        }
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

        cache(['access_user_id' . $user->id => []], -1);

        return Redirect::back()->with('success', 'User deleted.');
    }

    public function resetPassword(NativeRequest $request)
    {
        try {
            $input = $request->validate([
                'id' => 'required|exists:App\Models\User,id',
                'new' => 'required',
                'conf' => 'required|min:6',
            ]);
            if ($input['new'] !== $input['conf']) {
                return back()->withErrors(["error_message" => "Confirm Password don't match new Password"]);
            }
            User::findOrFail($input['id'])->update([
                "password" => Hash::make($input['new'])
            ]);
            return back()->with('message', "Password Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
            return back()->withErrors(["error_message" => "Server Error"]);
        }
    }
}
