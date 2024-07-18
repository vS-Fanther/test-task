<?php

namespace App\Domains\Country\Application\Api\Controllers;

use App\Domains\Country\Application\Api\Requests\GetCountriesRequest;
use App\Domains\Country\Services\GetCountriesService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetCountriesController extends Controller
{
    public function __construct(
        private GetCountriesService $getCountriesService
    ) {
    }

    public function getCountries(GetCountriesRequest $getCountriesRequest): ResourceCollection
    {
        $data = $this->getCountriesService->getCountries($getCountriesRequest);
        return ResourceCollection::make($data);
    }
}
