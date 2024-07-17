<?php

namespace App\Domains\Company\Models\DTOs;

/**
 * @property int $id
 * @property string $name
 * @property int $email
 * @property int $country_id
 */
class AddCompanyDTO
{
    public function __construct(
        private readonly string $name,
        private readonly string $email,
        private readonly int $country_id,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getCountryId(): int
    {
        return $this->country_id;
    }

}
