<?php

namespace App\Domains\Mining\Application\Api\Resources;

use App\Domains\Mining\Models\Mining;
use Illuminate\Http\Resources\Json\JsonResource;

class MiningResource extends JsonResource
{
    public function __construct(
       private readonly Mining $mining
    ) {
    }

    public function toArray($request): array
    {
        return [
            'id' => $this->mining->id,
            'companyId' => $this->mining->company_id,
            'date' => $this->mining->date,
            'minedWeight' => $this->mining->mined_weight
        ];
    }
}
