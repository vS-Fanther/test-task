<?php

namespace App\Domains\Company\Models;

use App\Domains\Company\Models\DTOs\AddCompanyDTO;
use App\Domains\Country\Models\Country;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $email
 * @property int $country_id
 */
class Company extends Model
{

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function fillFromDTO(AddCompanyDTO $addCompanyDTO): void
    {
        $this->name = $addCompanyDTO->getName();
        $this->email = $addCompanyDTO->getEmail();
        $this->country_id = $addCompanyDTO->getCountryId();
    }
}
