<?php

namespace App\Domains\Country\Services;

use App\Domains\Country\Application\Api\Requests\GetCountriesRequest;
use App\Domains\Country\Repositories\CountryDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetCountriesService
{
    public function __construct(
        private readonly CountryDbRepository $countryDbRepository
    ) {
    }

    public function getCountries(GetCountriesRequest $getCountriesRequest): Collection
    {
        return $this->countryDbRepository->getAllCountries();
    }
}
