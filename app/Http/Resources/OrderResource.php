<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'total' => round($this->total, 2),
            'state' => $this->state,
            'created_at' => $this->created_at->toDateTimeString(),
            'products' => ProductResource::collection($this->products),
            'customer' => new UserResource($this->whenLoaded('user')),
        ];
        // return parent::toArray($request);
    }
}
