<?php

namespace App\Domains\Country\Application\Actions;


use App\Domains\Country\Factories\CountryFactory;
use App\Domains\Country\Models\Country;
use App\Domains\Country\Models\DTOs\AddCountryDTO;
use App\Domains\Country\Repositories\CountryDbRepository;

class AddCountryAction
{
    public function __construct(
        private readonly CountryFactory      $countryFactory,
        private readonly CountryDbRepository $countryDbRepository
    ) {
    }

    public function execute(AddCountryDTO $countryDTO): Country
    {
        $country = $this->countryFactory->getCountryEntity();
        $country->fillFromDTO($countryDTO);

        return $this->countryDbRepository->save($country);
    }
}
