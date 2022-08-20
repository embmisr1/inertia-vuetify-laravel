<?php

namespace App\Http\Resources\Project;

use Illuminate\Http\Resources\Json\JsonResource;

class SpecificSubTypeResource extends JsonResource
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
            "project_specific_subtype_desc"=>$this->project_specific_subtype_desc,
            "project_specific_type"=>[
                "id"=>$this->project_specific_type->id,
                "desc"=>$this->project_specific_type->project_specific_type_desc,
            ]
        ];
    }
}
