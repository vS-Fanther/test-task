<?php

namespace App\Domains\Company\Application\Actions;


use App\Domains\Company\Models\Company;
use App\Domains\Company\Repositories\CompanyDbRepository;
use App\Domains\Company\Models\DTOs\EditCompanyDTO;

class EditCompanyAction
{
    public function __construct(
        private readonly CompanyDbRepository $companyDbRepository
    ) {
    }

    public function execute(Company $company, EditCompanyDTO $editCompanyDTO): Company
    {
        $company->name = $editCompanyDTO->getName();
        $company->email = $editCompanyDTO->getEmail();
        $company->country_id = $editCompanyDTO->getCountryId();

        return $this->companyDbRepository->save($company);
    }
}
