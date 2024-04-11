<?php

namespace App\Http\Resources\Fleet;

use Illuminate\Http\Resources\Json\JsonResource;

class DriverResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // $drive = array($this->asDriver);
        $isUser = in_array(12, json_decode($this->access->access_role_assigned)); // user
        $isAdmin= in_array(11, json_decode($this->access->access_role_assigned)); //  admin
        return [
            "id"=>$this->id, // user id
            "username"=>$this->username,
            "email"=>$this->email,
            "access"=>  $this->access->access_role_assigned,
            // "asDriver" => $this->asDriver, // driver_id,
            "asDriver"=>new AsDriverResources($this->asDriver),
            "admin_type"=>$isAdmin,
            "user_type"=>$isUser,
            // "access"=> auth()->user()->access
            // "vehicle_id" => $this->asDriver->vehicle_id, //vehicle id
            // "assigned_to" => $this->asDriver()->assigned_to,
            // "isOfficial" => $this->asDriver()->isOfficial,
            // "vehicle" => $this->asDriver()->vehicle,
        ];
    }
}
