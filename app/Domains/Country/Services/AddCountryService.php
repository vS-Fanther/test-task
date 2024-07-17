<?php

namespace App\Domains\Country\Services;

use App\Domains\Country\Application\Actions\AddCountryAction;
use App\Domains\Country\Application\Api\Requests\AddCountryRequest;
use App\Domains\Country\Models\Country;
use App\Domains\Country\Models\DTOs\AddCountryDTO;

class AddCountryService
{
    public function __construct(
        private readonly AddCountryAction $addCountryAction
    )
    {
    }

    public function addCountry(AddCountryRequest $addCountryRequest): Country
    {
        return $this->addCountryAction->execute(new AddCountryDTO(
            $addCountryRequest->name,
            $addCountryRequest->plan
        ));
    }
}
