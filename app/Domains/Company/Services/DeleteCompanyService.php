<?php

namespace App\Domains\Company\Services;

use App\Domains\Company\Application\Api\Requests\DeleteCompanyRequest;
use App\Domains\Company\Repositories\CompanyDbRepository;

class DeleteCompanyService
{
    public function __construct(
        private readonly CompanyDbRepository $companyDbRepository
    ) {
    }

    public function deleteCompany(DeleteCompanyRequest $deleteCompaniesRequest): bool
    {
        return $this->companyDbRepository->deleteCompany($deleteCompaniesRequest->id);
    }
}
