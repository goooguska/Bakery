<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IngredientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'ingredients',
            'id' => (string) $this->id,

            'attributes' => [
                'name' => $this->name,
                'quantity' =>(int) $this->quantity,
            ],
            'links' => [
                'self' => route('ingredients.show', ['ingredient' => $this->id]),
            ],
        ];
    }
}
