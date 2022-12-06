<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class MovResourceV2 extends JsonResource
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
            "user_id" => $this->user_id,
            "id" => $this->id,
            "name" => $this->name,
            "month" => Carbon::parse($this->month)->format('Y-m'),
            "prov" => $this->prov,
            "citymun" => $this->citymun,
            "brgy" => $this->brgy,
            "longitude" => $this->longitude === 'null' ? '' : $this->longitude,
            "latitude" => $this->latitude === 'null' ? '' : $this->latitude,
            "office" => $this->office,
            "type_of_monitoring" => $this->type_of_monitoring,
            "type_of_inspection" => $this->type_of_inspection,
            "type" => $this->type,
            "date_of_inspection" => $this->date_of_inspection,
            "notice_of_date" => $this->notice_of_date,
            "compliance_date" => $this->compliance_date,
            "complied" => $this->complied ? true : false,
            "remarks" => $this->remarks === 'null' ? '' : $this->remarks,
            "payment_date" => $this->payment_date,

            // "files"=>$this->getMedia("mov") ? AttachmentResource::collection($this->getMedia("mov")) : null,
        ];
    }
}
