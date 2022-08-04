<?php

namespace App\Http\Controllers\USER_CONTROLLER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\USER_ACCESS\UsersAccessRole;


class UsersAccessRoleController extends Controller
{
    public function create(request $request)
    {
        return Inertia::render("pages/users/Form/UserAccessRoleForm");
    }

    public function list(){
        $query_access_role =  UsersAccessRole::all();
        return Inertia::render("pages/users/Form/UserAccessRoleList", [
            'query_access_role' => $query_access_role,
        ]);
    }

    public function edit(request $request)
    {
        $id = $request->id;
        $users_access_role_info = UsersAccessRole::where('id',$id)->get();
        return Inertia::render("pages/user/Form/UserAccessRoleForm", [
            'users_access_role_info' => $users_access_role_info,
        ]);
    }

    public function register(request $request)
    {
        try {
            $query = new UsersAccessRole();
            $query->access_role = $request->access_role;
            $query->save();
            return back()->with("message", "Users Access Role Created");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function update(request $request)
    {
        try {
            $query = UsersAccessRole::find($request->id);
            $query->access_role = $request->access_role;
            $query->save();
            return back()->with("message", "Users Access Role Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function delete(request $request)
    {
        $users_access_role_delete = UsersAccessRole::find($request->id);
        $users_access_role_delete->delete();
        return back()->with("message", "Users Access Role Deleted");
    }
}
