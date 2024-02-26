<?php

namespace App\Http\Resources\Fleet;

use Illuminate\Http\Resources\Json\JsonResource;

class AsDriverResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "vehicle_id"=>$this->vehicle_id,
            "isOfficial"=>$this->isOfficial,
            "assigned_to"=> json_decode($this->assigned_to),
            "assigned_to_human_readable"=> implode(', ',json_decode($this->assigned_to)),
            "vehicle"=>new VehicleResources($this->vehicle)

        ];
    }
}
