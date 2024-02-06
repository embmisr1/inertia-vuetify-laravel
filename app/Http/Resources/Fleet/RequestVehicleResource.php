<?php

namespace App\Http\Resources\Fleet;

use Illuminate\Http\Resources\Json\JsonResource;

class RequestVehicleResource extends JsonResource
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
            "id" => $this->id,
            "createdBy" => $this->createdBy,
            "name" => $this->name,
            "purpose" => $this->purpose,
            "destination" => $this->destination,
            "name_of_firms" => $this->name_of_firms,
            "places" => $this->places,
            "departure" => $this->departure,
            "arrival" => $this->arrival,
            "requestedBy" => $this->requestedBy,
            "approvedBy" => $this->approvedBy,
            "status" => $this->status,
        ];
    }
}
