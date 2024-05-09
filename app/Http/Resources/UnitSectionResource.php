<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UnitSectionResource extends JsonResource
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
            "PK_section_ID"=>$this->PK_section_ID,
            "description"=>$this->description,
            // "division"=>$this->division ? $this->division->name :NULL,
            // "division_id"=>$this->FK_division_ID ?? null,
        ];
    }
}
