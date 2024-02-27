<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SectionResource extends JsonResource
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
            "id"=>$this->PK_section_ID,
            "division_id"=>$this->FK_division_ID,
            "description"=>$this->description,
            "shortName"=>$this->shortName,
            "division"=>$this->division,
        ];
    }
}
