<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "UF" => "PA",
            "Cidade" => AddressResource::collection($this->whenLoaded("cities")),
            "Bairro" => $this->district,
            "rua" =>  $this->street,
            "número" => $this->number
        ];
    }
}
