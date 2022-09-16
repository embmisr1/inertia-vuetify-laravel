<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordChange;
use App\Http\Resources\LogsResource;
use App\Http\Resources\UsersResource;
use App\Models\Logs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

use Illuminate\Support\Facades\Request as FacadesRequest;

class Profile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->id();
        $user = User::findOrFail($user_id);
        $user_logs = Logs::whereUserId($user_id)->paginate(request("per_page", 10));

        return Inertia::render("pages/profile/", [
            'filters' => FacadesRequest::all(
                "activity_type",
                "activity",
                "per_page"
            ),
            // 'users' => User::orderByUserName()
            //     ->filter(Request::only('search'))
            //     ->paginate(5)
            "data" => new UsersResource($user),
            "user_logs" => LogsResource::collection($user_logs)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasswordChange $request)
    {
        try {
            $input = $request->validated();
            $user = User::find(auth()->id());
            if (!Hash::check($input['old'], $user->password)) {
                return back()->withErrors(["error_message" => "Password Don't Match"]);
            }

            if ($input['old'] === $input['new']) {
                return back()->withErrors(["error_message" => "New Password cannot be the same as old password"]);
            }

            if ($input['new'] !== $input['conf']) {
                return back()->withErrors(["error_message" => "Confirm Password don't match new Password"]);
            }

            $user->update([
                "password" => Hash::make($input['new'])
            ]);

            return back()->with('message', "Password Updated");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => "Server Error"]);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
