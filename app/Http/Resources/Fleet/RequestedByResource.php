<?php

namespace App\Http\Resources\Fleet;

use Illuminate\Http\Resources\Json\JsonResource;

class RequestedByResource extends JsonResource
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
            // "id" => $this->id,
            // "employee_id" => $this->employee_id,
            "username" => $this->username,
            // "email" => $this->email ?? null,
            // "position" => $this->position->name ?? null,
            // "unit_section" => $this->unit_section->name ?? null,
            // "section_id" => $this->section_id ?? null,
            // "section" => $this->section ?? null,
            // // "section" => new SectionResource($this->section) ?? null,
            // "position_id" => $this->position_id ?? null,
            // "unit_section_id" => $this->unit_section_id ?? null,
            // "selected_roles" => $this->access ? json_decode($this->access->access_role_assigned,true) : array(),
        ];
    }
}
