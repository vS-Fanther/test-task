<?php

namespace App\Domains\Country\Application\Api\Controllers;

use App\Domains\Country\Application\Api\Requests\DeleteCountryRequest;
use App\Domains\Country\Services\DeleteCountryService;
use App\Http\Controllers\Controller;

class DeleteCountryController extends Controller
{
    public function __construct(
        private DeleteCountryService $deleteCountryService
    ) {
    }

    public function deleteCountry(DeleteCountryRequest $deleteCountryRequest): int
    {
        $this->deleteCountryService->deleteCountry($deleteCountryRequest);

        return $deleteCountryRequest->id;
    }
}
