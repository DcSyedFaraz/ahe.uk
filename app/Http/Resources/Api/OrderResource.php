<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "invoice"       => $this->invoice,
            "status"        => $this->status,
            "user"          => $this->user,
            "multipart"     => [
                'name'      =>  'emailAttacement',
                'content'   => $this->files
            ]
        ];
    }
}
