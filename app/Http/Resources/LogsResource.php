<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class LogsResource extends JsonResource
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
            "user_id" => $this->user_id,
            "model" => $this->model,
            "user" => $this->user->username,
            "type" => ucfirst($this->activity_type),
            "activity" => ucfirst($this->activity),
            "created_at" => Carbon::parse($this->created_at)->format('M d, Y -  h:m a '),

        ];
    }
}
