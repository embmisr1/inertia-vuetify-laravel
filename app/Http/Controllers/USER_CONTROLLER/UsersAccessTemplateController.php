<?php

namespace App\Http\Controllers\USER_CONTROLLER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\USER_ACCESS\UsersAccessTemplate;
use App\Models\USER_ACCESS\UsersAccessRole;

class UsersAccessTemplateController extends Controller
{
    public function create(request $request)
    {
        $query_access_role =  UsersAccessRole::all();
        return Inertia::render("pages/users/Form/UserAccessTemplateForm", [
            'query_access_role' => $query_access_role,
        ]);
    }

    public function list(){
        $query_access_template =  UsersAccessTemplate::all();
        return Inertia::render("pages/users/Form/UserAccessTemplateList", [
            'query_access_template' => $query_access_template,
        ]);
    }

    public function edit(request $request)
    {
        $id = $request->id;
        $users_access_template_info = UsersAccessTemplate::where('id',$id)->get();
        $query_access_role =  UsersAccessRole::all();
        return Inertia::render("pages/user/Form/UserAccessTemplateForm", [
            'users_access_template_info' => $users_access_template_info,
            'query_access_role' => $query_access_role,
        ]);
    }

    public function register(request $request)
    {
        try {
            $query = new UsersAccessTemplate();
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
            $query = UsersAccessTemplate::find($request->id);
            $query->access_role = $request->access_role;
            $query->save();
            return back()->with("message", "Users Access Role Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function delete(request $request)
    {
        $users_access_template_delete = UsersAccessTemplate::find($request->id);
        $users_access_template_delete->delete();
        return back()->with("message", "Users Access Role Deleted");
    }
}
