<?php

namespace App\Http\Resources\Fleet;

use Carbon\Carbon;
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

            "name" => $this->name,
            "purpose" => $this->purpose,
            "destination" => $this->destination,
            "name_of_firms" => $this->name_of_firms,
            "places" => $this->places,
            "departure" => $this->departure,
            "arrival" => $this->arrival,
            "requestedBy" => new \App\Http\Resources\UsersResource($this->requested_user),
            // "requestedBy" => new RequestedByResource($this->requested_user),
            "approvedBy" => $this->approvedBy,
            "status" => $this->status,
            "created_at" => Carbon::parse($this->created_at)->format('M d, Y'),
            "departure_readable" => Carbon::parse($this->departure)->format('M d, Y'),
            "arrival_readable" => Carbon::parse($this->arrival)->format('M d, Y'),
        ];
    }
}
