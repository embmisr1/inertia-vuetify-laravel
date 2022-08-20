<?php

namespace App\Http\Resources\Project;

use Illuminate\Http\Resources\Json\JsonResource;

class SpecificTypeResource extends JsonResource
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
            "project_specific_type_desc" => $this->project_specific_type_desc,
            "project_subtype" => [
                "id" => $this->project_subtype->id,
                "desc" => $this->project_subtype->project_subtype_desc,
            ],
        ];
    }
}
