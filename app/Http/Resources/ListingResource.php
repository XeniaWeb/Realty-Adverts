<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Listing */
class ListingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'beds' => $this->beds,
            'baths' => $this->baths,
            'area' => $this->area,
            'city' => $this->city,
            'code' => $this->code,
            'street' => $this->street,
            'street_number' => $this->street_number,
            'price' => $this->price,
        ];
    }
}
