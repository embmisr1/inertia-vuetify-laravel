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
        return [
            "id"=>$this->id, // user id
            "username"=>$this->username,
            "email"=>$this->email,
            "asDriver" => $this->asDriver, // driver_id,
            // "vehicle_id" => $this->asDriver->vehicle_id, //vehicle id
            // "assigned_to" => $this->asDriver()->assigned_to,
            // "isOfficial" => $this->asDriver()->isOfficial,
            // "vehicle" => $this->asDriver()->vehicle,
        ];
    }
}
