<?php

namespace App\Domains\Company\Application\Api\Controllers;

use App\Domains\Company\Application\Api\Requests\AddCompanyRequest;
use App\Domains\Company\Services\AddCompanyService;
use App\Domains\Company\Application\Api\Resources\CompanyResource;
use App\Http\Controllers\Controller;

class AddCompanyController extends Controller
{
    public function __construct(
        private AddCompanyService $addCompanyService
    ) {
    }

    public function addCompany(AddCompanyRequest $addCompanyRequest): CompanyResource
    {
        $data = $this->addCompanyService->addCountry($addCompanyRequest);
        return new CompanyResource($data);
    }
}
