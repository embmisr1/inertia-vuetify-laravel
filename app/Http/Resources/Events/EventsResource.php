<?php

namespace App\Http\Resources\Events;

use Illuminate\Http\Resources\Json\JsonResource;

class EventsResource extends JsonResource
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
            "user_id" => $this->user(), // creator of the event
            "title" => $this->title,
            "description" => $this->description,
            "location" => $this->location,
            "eventDateTime" => $this->eventDateTime,
            "isOnline" => $this->isOnline,
            "isF2f" => $this->isF2f,
            "isHybrid" => $this->isHybrid,
            "requestForMIS" => $this->requestForMIS,
            "departureDateTime" => $this->departureDateTime,
            "remarks" => $this->remarks,
            "status" => $this->status,
            "link" => $this->link(),
            "logs" => $this->logs(),
        ];
    }
}
