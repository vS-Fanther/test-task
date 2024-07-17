<?php

namespace App\Domains\Company\Application\Api\Controllers;

use App\Domains\Company\Application\Api\Requests\GetCompaniesRequest;
use App\Domains\Company\Services\GetCompaniesService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetCompaniesController extends Controller
{
    public function __construct(
        private GetCompaniesService $getCompaniesService
    ) {
    }

    public function getCompanies(GetCompaniesRequest $getCompaniesRequest): ResourceCollection
    {
        $data = $this->getCompaniesService->getCompanies($getCompaniesRequest);
        return ResourceCollection::make($data);
    }
}
