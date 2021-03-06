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
            "cidade" => $this->city,
            "Endereço" => CityResource::collection($this->whenLoaded("address")),
            "Bairro" => $this->district,
            "Rua" =>  $this->street,
            "número" => $this->number
        ];
    }
}
