<?php

namespace App\Domains\Country\Application\Api\Resources;

use App\Domains\Country\Models\Country;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    public function __construct(
       private readonly Country $country
    ) {
    }

    public function toArray($request): array
    {
        return [
            'id' => $this->country->id,
            'name' => $this->country->name,
            'plan' => $this->country->plan
        ];
    }
}
