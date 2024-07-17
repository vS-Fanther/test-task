<?php

namespace App\Domains\Country\Application\Actions;


use App\Domains\Country\Models\Country;
use App\Domains\Country\Models\DTOs\EditCountryDTO;
use App\Domains\Country\Repositories\CountryDbRepository;

class EditCountryAction
{
    public function __construct(
        private readonly CountryDbRepository $countryDbRepository
    ) {
    }

    public function execute(Country $country, EditCountryDTO $editCountryDTO): Country
    {
        $country->name = $editCountryDTO->getName();
        $country->plan = $editCountryDTO->getPlan();

        return $this->countryDbRepository->save($country);
    }
}
