<?php

namespace App\Domains\Company\Models\DTOs;

/**
 * @property string $name
 * @property string $email
 * @property int $countryId
 */
class EditCompanyDTO
{
    public function __construct(
        private readonly string $name,
        private readonly string $email,
        private readonly int $countryId,
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
        return $this->countryId;
    }
}
