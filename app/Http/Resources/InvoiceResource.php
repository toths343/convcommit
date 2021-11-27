<?php

namespace App\Http\Resources;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @OA\Schema( title="InvoiceResource" ) */
class InvoiceResource extends JsonResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Models\Base\Invoice
     */
    private $data;

    /**
     * Transform the resource into an array.
     *
     * @param  Request|Invoice  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->inv_id,
            'status' => $this->inv_status,
            'type' => $this->inv_type,
        ];
    }
}
