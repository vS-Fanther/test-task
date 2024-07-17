<?php

namespace App\Domains\Country\Models\DTOs;

/**
 * @property string $name
 * @property int $plan
 */
class AddCountryDTO
{
    public function __construct(
        private readonly string $name,
        private readonly int $plan,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPlan(): int
    {
        return $this->plan;
    }
}
