<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $product = [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'image' => asset('storage/images/product-images/' . $this->image),
            'available' => boolval($this->available),
        ];

        if ($this->pivot) {
            $product['quantity'] = $this->pivot->quantity;
            $product['subtotal'] = $this->pivot->quantity * $this->price;
        }

        return $product;
        // return parent::toArray($request);
    }
}
