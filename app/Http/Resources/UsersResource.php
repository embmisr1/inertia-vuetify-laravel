<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($reques0t)
    {
        return [
            "id" => $this->id,
            "username" => $this->username,
            "email" => $this->email,
            "position" => $this->position->name,
            "unit_section" => $this->unit_section->name ?? null,
            "position_id" => $this->position_id,
            "unit_section_id" => $this->unit_section_id ?? null,
            "selected_roles" => $this->access ? json_decode($this->access->access_role_assigned,true) : array(),
        ];
    }
}
