<?php

namespace App\Domains\Company\Application\Actions;

use App\Domains\Company\Factories\CompanyFactory;
use App\Domains\Company\Models\Company;
use App\Domains\Company\Models\DTOs\AddCompanyDTO;
use App\Domains\Company\Repositories\CompanyDbRepository;

class AddCompanyAction
{
    public function __construct(
        private readonly CompanyFactory      $companyFactory,
        private readonly CompanyDbRepository $companyDbRepository
    ) {
    }

    public function execute(AddCompanyDTO $addCompanyDTO): Company
    {
        $company = $this->companyFactory->getCompanyEntity();
        $company->fillFromDTO($addCompanyDTO);

        return $this->companyDbRepository->save($company);
    }
}
