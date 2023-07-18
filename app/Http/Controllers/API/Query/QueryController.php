<?php

namespace App\Http\Controllers\API\Query;

use App\Http\Controllers\Controller;
use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function search_employee(Request $request)
    {
        try {
            $user = User::query()
                ->where('username', 'LIKE', "%" . request('query') . "%")
                ->orWhere('email', 'LIKE', "%" . request('query') . "%")
                ->paginate(request('size', 10));
                return UsersResource::collection($user);
            // return response()->json([
            //     "data" => UsersResource::collection($user)
            // ]);
        } catch (\Throwable $th) {
            return response()->json(["message" => $th->getMessage()], 400);
        }
    }
    public function search_employee_id(Request $request)
    {
        try {
            $user = User::query()
                ->where('id', 'LIKE', "%" . request('query') . "%")
                ->paginate(request('size', 10));
                return UsersResource::collection($user);
            // return response()->json([
            //     "data" => UsersResource::collection($user)
            // ]);
        } catch (\Throwable $th) {
            return response()->json(["message" => $th->getMessage()], 400);
        }
    }
}
