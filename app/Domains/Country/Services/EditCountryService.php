<?php

namespace App\Domains\Country\Services;


use App\Domains\Country\Application\Actions\EditCountryAction;
use App\Domains\Country\Application\Api\Requests\EditCountryRequest;
use App\Domains\Country\Models\Country;
use App\Domains\Country\Models\DTOs\EditCountryDTO;
use App\Domains\Country\Repositories\CountryDbRepository;

class EditCountryService
{
    public function __construct(
       private readonly CountryDbRepository $countryDbRepository,
        private readonly EditCountryAction $editCountryAction
    ) {
    }

    public function editCountry(EditCountryRequest $editCountryRequest, $id): Country
    {
        $country = $this->countryDbRepository->getCountryById($id);
        $editCountryDTO = new EditCountryDTO(
            $editCountryRequest->name??$country->name,
            $editCountryRequest->plan??$country->plan,
        );

        return $this->editCountryAction->execute($country, $editCountryDTO);
    }
}
