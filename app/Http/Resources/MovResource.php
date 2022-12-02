<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class MovResource extends JsonResource
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
            "month" => Carbon::parse($this->month)->format('M/Y'),
            "prov" => $this->prov,
            "office" => $this->office,
            "type_of_monitoring" => $this->type_of_monitoring,
            "type_of_inspection" => $this->type_of_inspection,
            "type" => $this->type,
        ];
    }
}
