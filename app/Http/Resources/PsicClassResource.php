<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PsicClassResource extends JsonResource
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
            "psic_class_desc" => $this->psic_class_desc,
            "psic_group" => [
                "psic_group_id"=>$this->psic_group_FK->id,
                "psic_group_desc"=>$this->psic_group_FK->psic_group_desc,
            ],
        ];
    }
}
