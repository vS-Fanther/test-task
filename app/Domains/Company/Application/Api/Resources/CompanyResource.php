<?php

namespace App\Domains\Company\Application\Api\Resources;

use App\Domains\Company\Models\Company;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function __construct(
       private readonly Company $company
    ) {
    }

    public function toArray($request): array
    {
        return [
            'id' => $this->company->id,
            'name' => $this->company->name,
            'email' => $this->company->email,
            'countryId' => $this->company->country_id,
        ];
    }
}
