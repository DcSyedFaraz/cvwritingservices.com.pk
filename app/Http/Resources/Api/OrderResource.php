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
            "user"          => $this->user,
            "detail"        => $this->detail,
            "career_level"  => $this->careerLevel,
            "package"       => $this->package,
            "order_service" => $this->orderService,
            "deadline"      => $this->deadline,
            "status"        => $this->status,
            "invoice"       => $this->invoice,
            "created_at"    => $this->created_at,
            "updated_at"    => $this->updated_at,
            "amount_pretty"        => addCurrency($this->invoice->amount ?? 0),
            "created_at_pretty"    => showDate($this->created_at),
             "multipart"     => [
                'name'      =>  'emailAttacements',
                'content'   => $this->files

            ]
        ];
    }
}
