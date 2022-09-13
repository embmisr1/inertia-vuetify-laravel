<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Polygon extends JsonResource
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
            "lng" => floatval($this->polygon_longitude),
            "lat" => floatval($this->polygon_latitude),
        ];
    }
}
