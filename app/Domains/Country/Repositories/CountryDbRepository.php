<?php

namespace App\Domains\Country\Repositories;

use App\Domains\Country\Models\Country;
use Illuminate\Database\Eloquent\Collection;

class CountryDbRepository
{
    public function getAllCountries(): Collection
    {
        return Country::all();
    }

    public function save(Country $country): Country
    {
        $country->save();
        return $country;
    }

    public function deleteCountry(int $countryId): bool {
        return $this->getCountryById($countryId)->delete();
    }

    public function getCountryById(int $countryId): Country
    {
        /** @var Country */
        return Country::query()->findOrFail($countryId);
    }
}
