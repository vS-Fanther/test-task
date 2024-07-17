<?php

namespace App\Domains\Company\Application\Api\Controllers;

use App\Domains\Company\Application\Api\Requests\DeleteCompanyRequest;
use App\Domains\Company\Services\DeleteCompanyService;
use App\Http\Controllers\Controller;

class DeleteCompanyController extends Controller
{
    public function __construct(
        private DeleteCompanyService $deleteCompanyService
    ) {
    }

    public function deleteCompany(DeleteCompanyRequest $deleteCompanyRequest): int
    {
        $this->deleteCompanyService->deleteCompany($deleteCompanyRequest);

        return $deleteCompanyRequest->id;
    }
}
