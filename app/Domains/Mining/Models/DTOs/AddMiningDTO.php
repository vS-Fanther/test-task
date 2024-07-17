<?php

namespace App\Domains\Mining\Models\DTOs;

use Carbon\Carbon;

/**
 * @property int $id
 * @property int $companyId
 * @property Carbon $date
 * @property int $minedWeight
 */
class AddMiningDTO
{
    public function __construct(
        private readonly int $companyId,
        private readonly Carbon $date,
        private readonly int $minedWeight
    ) {
    }

    public function getCompanyId(): int
    {
        return $this->companyId;
    }

    public function getDate(): Carbon
    {
        return $this->date;
    }

    public function getMinedWeight(): int
    {
        return $this->minedWeight;
    }
}
