<?php

namespace App\Domains\Mining\Application\Api\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class MiningsForMonthResource extends JsonResource
{
    public function __construct(
        private readonly Collection $data
    ) {
    }

    public function toArray($request): array
    {
        $result = [];
        for ($i = 0; $i < $this->data->count(); $i++) {
            $result[$i] = [
                'country' => $this->data[$i]->Country,
                'mining' => $this->data[$i]->Mined,
                'plan' => $this->data[$i]->Plan,
            ];
        }
        return $result;
    }
}
