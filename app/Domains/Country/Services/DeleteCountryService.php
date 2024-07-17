<?php

namespace App\Domains\Country\Services;


use App\Domains\Country\Application\Api\Requests\DeleteCountryRequest;
use App\Domains\Country\Repositories\CountryDbRepository;

class DeleteCountryService
{
    public function __construct(
        private readonly CountryDbRepository $countryDbRepository
    ) {
    }

    public function deleteCountry(DeleteCountryRequest $deleteCountryRequest): bool
    {
        return $this->countryDbRepository->deleteCountry($deleteCountryRequest->id);
    }
}
