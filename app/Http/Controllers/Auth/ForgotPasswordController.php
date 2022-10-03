<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendActivationEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use App\Providers\RouteServiceProvider;

class ForgotPasswordController extends Controller
{
    public function index(Request $request)
    {
        return inertia("pages/forgot_password");
    }

    public function post(Request $request)
    {
        try {
            $input = $request->validate([
                "email" => "required|email"
            ]);
            $user = User::select('id')->whereEmail($input['email'])->first();
            if (!$user) return response()->json([
                "error_message" => "This Email Not Registered"
            ], 400);
            $generate_password = $this->generateRandomString();
            // $generate_password = "123456";
            $user->update([
                // "activation_key" => Hash::make($generate_password)
                "activation_key" => $generate_password
            ]);
            // return new SendActivationEmail($input['email'], $generate_password);

            Mail::to($input['email'])->send(new SendActivationEmail($input['email'],$generate_password));
            return response()->json([
                "message" => "Activation Key Sent to your email",
                "user_id" => $user->id,
            ]);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json([
                "error_message" => "Server Error"
            ], 400);
        }
    }

    public function generateRandomString($length = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function verify_code(Request $request, User $user)
    {
        try {
            $input = $request->validate([
                "activation_key" => "required",
            ]);
            // $isValid = Hash::check($input['activation_key'], $user->activation_key);
            $isValid = $input['activation_key'] === $user->activation_key ? true: false;
            if (!$isValid) {
                return back()->withErrors(["error_message" => "Invalid activation key"]);
            }
            $user->update([
                "password" => Hash::make(env("DEFAULT_USER_PASSWORD", "password")),
                "activation_key" => null,
            ]);
            return redirect()->route("universe_list")->with("message", "Password Reset to Default");
        } catch (\Throwable $th) {
            dd($th);
            return back()->withErrors(["error_message" => "Server Error"]);
        }
    }
}
