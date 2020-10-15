<?php

namespace App\Http\Resources;

use App\Models\Amount;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class AmountResource
 * @package App\Http\Resources
 * @mixin Amount
 */
class AmountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'value' => $this->value,
            'quantity' => $this->quantity
        ];
    }
}
