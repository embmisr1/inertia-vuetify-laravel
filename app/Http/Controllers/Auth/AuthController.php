<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\AuthRequestForm;
use App\Http\Resources\AuthResource;
use App\Models\USER_ACCESS\UsersAccess;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia("pages/index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(AuthRequestForm $request)
    {
        try {
            $request->authenticate();

            $request->session()->regenerate();

            $user = UsersAccess::select("access_role_assigned")->firstOrFail()->where('users_FK', auth()->id())->get();
            if (!count($user)) {
                Auth::guard('web')->logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect('/')->withErrors(["error_message" => "User has No Access. Please Contact MIS"]);
            }
            return redirect()->intended(RouteServiceProvider::HOME);
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => $th->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function api_login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);

            $user = User::leftjoin('tbl_users_access', 'tbl_users_access.id', '=', 'users.id')->whereUsername($credentials['username'])->firstOrFail();

            if (!$user || !Hash::check($credentials['password'], $user['password'])) {
                return response()->json(["message" => "Invallid Credentials!"], 422);
            };


            // create token here
            $token = $user->createToken('user_api_token');

            return new AuthResource($token);
        } catch (\Throwable $th) {
            return response()->json([
                "data" => $th->getMessage(),
                "message" => "Error No User Found"
            ], 400);
        }
    }

    public function api_logout(Request $request)
    {
        try {
            auth()->user()->currentAccessToken()->delete();
            return response()->json(['message' => 'Successfully logged out.'], 204);
        } catch (\Throwable $th) {
            return response()->json([
                "data" => $th->getMessage(),
                "message" => "No Token Found"
            ], 400);
        }
    }
}
