<?php

namespace App\Http\Resources\Project;

use Illuminate\Http\Resources\Json\JsonResource;

class SubTypeResource extends JsonResource
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
            "project_subtype_desc" => $this->project_subtype_desc,
            "project_type" => [
                "id" => $this->project_type->id,
                "desc" => $this->project_type->project_type_desc,
            ]
        ];
    }
}
