<?php

namespace App\Domains\Company\Services;

use App\Domains\Company\Application\Api\Requests\GetCompaniesRequest;
use App\Domains\Company\Repositories\CompanyDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetCompaniesService
{
    public function __construct(
        private readonly CompanyDbRepository $companyDbRepository
    ) {
    }

    public function getCompanies(GetCompaniesRequest $getCompaniesRequest): Collection
    {
        return $this->companyDbRepository->getAllCompanies();
    }
}
