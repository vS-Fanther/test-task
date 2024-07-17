<?php

namespace App\Domains\Country\Factories;

use App\Domains\Country\Models\Country;

class CountryFactory
{
    public function getCountryEntity(): Country
    {
        return new Country();
    }
}
