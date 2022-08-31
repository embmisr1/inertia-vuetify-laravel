<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Models\USER_ACCESS\UsersAccess;
use App\Models\USER_ACCESS\UsersAccessRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;

class HandleUserRoleAndPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {

            $check_user_role = cache("access_user_id" . auth()->id());

            if ($check_user_role === null) {
                $user = UsersAccess::select("access_role_assigned")->firstOrFail()->where('users_FK', auth()->id())->get();
                // dd($user);
                if (!count($user)) {
                    Auth::guard('web')->logout();

                    $request->session()->invalidate();

                    $request->session()->regenerateToken();

                    return redirect('/')->withErrors(["error_message" => "User has No Access. Please Contact MIS"]);
                    //    dd("User has No Access");
                    // return redirect("/");
                    // return redirect()->route("authForm")->withErrors(["error_message" => "User has No Access"]);
                }

                $access_role_assigned = UsersAccessRole::find(json_decode($user[0]->access_role_assigned, true));
                $request->user_access = $access_role_assigned->pluck("access_role");
                // $request->user_access = $access_role_assigned;
                return $next($request);
            }
            $request->user_access = $check_user_role;

        } catch (\Throwable $th) {
            // return redirect("authForm")->with("message","You don't have a permission Please Contact MIS");
            // return back()->with("message","You don't have a permission Please Contact MIS");
            return back()->withErrors(["error_message" => "Form Error"]);
            return $th->getMessage();
        }
    }
}
