<?php

namespace App\Domains\Country\Application\Api\Controllers;

use App\Domains\Country\Application\Api\Requests\AddCountryRequest;
use App\Domains\Country\Application\Api\Resources\CountryResource;
use App\Domains\Country\Services\AddCountryService;
use App\Http\Controllers\Controller;

class AddCountryController extends Controller
{
    public function __construct(
        private AddCountryService $addCountryService
    ) {
    }

    public function addCountry(AddCountryRequest $addCountryRequest): CountryResource
    {
        $data = $this->addCountryService->addCountry($addCountryRequest);
        return new CountryResource($data);
    }
}
