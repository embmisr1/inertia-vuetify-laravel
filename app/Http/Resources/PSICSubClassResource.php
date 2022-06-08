<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PSICSubClassResource extends JsonResource
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
            "psic_subclass_desc" => $this->psic_subclass_desc,
            "psic_class" => [
                "id" => $this->psic_class->id,
                "desc" => $this->psic_class->psic_class_desc,
            ],
        ];
    }
}
