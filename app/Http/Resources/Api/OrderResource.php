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
        // return parent::toArray($request);

        return [
            'id'            => $this->id,
            "name"          => $this->name,
            "user"          => $this->user,
            "package"       => $this->package,
            "academic"      => $this->academic,
            "deadline"      => $this->deadline,
            "status"        => $this->status,
            'detail'        => $this->detail,
            'subject'        => $this->subject,
            "invoice"       => $this->invoice,
            "created_at"    => $this->created_at,
            "updated_at"    => $this->updated_at,
            "amount_pretty"        => addCurrency($this->total_price ?? 0),
            "created_at_pretty"    => showDate($this->created_at),
            "multipart"     =>[
                'name'      =>  'files',
                'content'   => $this->files

            ]
        ];
    }
}
