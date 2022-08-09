<?php

namespace App\Http\Controllers\USER_CONTROLLER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\USER_ACCESS\UsersAccess;
use App\Models\USER_ACCESS\UsersAccessRole;
use App\Models\USER_ACCESS\UsersAccessTemplate;

class UsersAccessController extends Controller
{
    public function create(request $request)
    {
        try {
            $id = $request->id;
            $users_info = User::where('id', $id)->get();
            $query_access_role =  UsersAccessRole::all();
            $query_access_template =  UsersAccessTemplate::all();
            $user_access = UsersAccess::where("users_FK",$id)->get();
            // return Inertia::render("pages/users/Form/UsersForm", [
            //     'users_info' => $users_info,
            //     'query_access_role' => $query_access_role,
            //     'query_access_template' => $query_access_template,
            // ]);
            return [
                'users_info' => $users_info[0],
                'query_access_role' => $query_access_role,
                'query_access_template' => $query_access_template,
                "user_access" => $user_access
            ];
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function list()
    {
        $users_info = User::all();
        return Inertia::render("pages/users/Form/UserAccessRoleList", [
            'users_info' => $users_info,
        ]);
    }

    public function edit(request $request)
    {
        $id = $request->id;
        $query_access_role =  UsersAccessRole::all();
        $users_info = DB::table('users')->select('*')->where('id', $id)->get();
        $query_access_template =  UsersAccessTemplate::all();
        return Inertia::render("pages/user/Form/UserForm", [
            'users_info' => $users_info,
            'query_access_role' => $query_access_role,
            'query_access_template' => $query_access_template,
        ]);
    }

    public function register(request $request)
    {
        try {
            $query = new UsersAccess();
            $query->access_role_assigned = json_encode($request->access_role_assigned);
            $query->users_FK = $request->users_FK;
            $query->save();
            return back()->with("message", "Users Access Created");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function update(request $request)
    {
        try {
            $query = UsersAccess::find($request->id);
            $query->access_role_assigned = json_encode($request->access_role_assigned);
            $query->access_role_assigned = $request->access_role_assigned;
            $query->users_FK = $request->users_FK;
            $query->save();
            return back()->with("message", "Users Access Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function delete(request $request)
    {
        $users_delete = UsersAccess::find($request->id);
        $users_delete->delete();
        return back()->with("message", "Users Access Deleted");
    }
}
