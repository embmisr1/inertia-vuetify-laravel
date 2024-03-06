<?php

namespace App\Http\Resources\Fleet;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RemarksResource extends JsonResource
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
            'id' => $this->id,
            'remarks' => $this->remarks,
            'request_id' => $this->request_id,
            "user"=>$this->user->username,
            "created_at"=>Carbon::parse($this->created_at)->format('M d, Y'),
        ];
    }
}
