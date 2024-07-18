<?php

namespace App\Domains\Country\Models;

use App\Domains\Company\Models\Company;
use App\Domains\Country\Models\DTOs\AddCountryDTO;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $plan
 */
class Country extends Model
{

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function fillFromDTO(AddCountryDTO $addCountryDTO): void
    {
        $this->name = $addCountryDTO->getName();
        $this->plan = $addCountryDTO->getPlan();
    }
}
