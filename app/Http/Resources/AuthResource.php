<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user' => [
                'username' => $this->accessToken->tokenable->username,
                'employee_id' => $this->accessToken->tokenable->employee_id,
                'access'=>$this->accessToken->tokenable->access
                // 'lastname' => $this->accessToken->tokenable->lastname,
            ],
            'token' => $this->plainTextToken,

        ];
    }
}
