<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttachmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        try {
            return [
                'id' => $this->id,
                'name' => $this->name,
                'file_name' => $this->file_name,
                'uuid' => $this->uuid,
                'url' => $this->getUrl() ? $this->getUrl() :null,
                'mime_type' => $this->mime_type,
                'size' => $this->human_readable_size
            ];
        } catch (\Throwable $th) {
            return [
                'id' => $this->id,
                'name' => $this->file_name,
                'file_name' => $this->file_name,
                'uuid' => $this->uuid,
                "link"=> '/storage/mov/' . $this->id . '/' . $this->file_name,
                'mime_type' => $this->mime_type,
                'size' => $this->size
            ];
        }
    }
}
