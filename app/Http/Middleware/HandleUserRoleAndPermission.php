<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Models\USER_ACCESS\UsersAccess;
use App\Models\USER_ACCESS\UsersAccessRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

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

            $user = UsersAccess::select("access_role_assigned")->firstOrFail()->where('users_FK', auth()->id())->get();

            $access_role_assigned = UsersAccessRole::find(json_decode($user[0]->access_role_assigned, true));

            $request->user_access = $access_role_assigned->pluck("access_role");

            return $next($request);
        } catch (\Throwable $th) {
            dd($th);
            return $th->getMessage();
        }
    }
}
