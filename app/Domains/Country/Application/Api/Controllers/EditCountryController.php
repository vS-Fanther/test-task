<?php

namespace App\Domains\Country\Application\Api\Controllers;

use App\Domains\Country\Application\Api\Requests\EditCountryRequest;
use App\Domains\Country\Application\Api\Resources\CountryResource;
use App\Domains\Country\Services\EditCountryService;
use App\Http\Controllers\Controller;

class EditCountryController extends Controller
{
    public function __construct(
        private EditCountryService $editCountryService
    ) {
    }

    public function editCountry(EditCountryRequest $editCountryRequest, $id): CountryResource
    {
        $data = $this->editCountryService->editCountry($editCountryRequest, $id);
        return new CountryResource($data);
    }
}
