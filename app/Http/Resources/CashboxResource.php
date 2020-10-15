<?php

namespace App\Http\Resources;

use App\Models\Cashbox;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CashboxResource
 * @package App\Http\Resources
 * @mixin Cashbox
 */
class CashboxResource extends JsonResource
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
            'model' => $this->model,
            'number' => $this->number,
            'amouts' => AmountResource::collection($this->whenLoaded('amounts'))
        ];
    }
}
