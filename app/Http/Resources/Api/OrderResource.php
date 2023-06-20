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
            'id'            => $this->id,
            "invoice"       => $this->invoice,
            "status"        => $this->status,
            "detail"        => $this->detail,
            "user"          => $this->user,
            "amount_pretty"        => addCurrency($this->invoice->amount ?? 0),
            "created_at_pretty"    => showDate($this->created_at),
            "multipart"     => [
                'name'      =>  'emailAttacement',
                'content'   => $this->files
            ]
        ];
    }
}
