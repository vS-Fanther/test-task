<?php

namespace App\Domains\Company\Repositories;

use App\Domains\Company\Models\Company;
use Illuminate\Database\Eloquent\Collection;

class CompanyDbRepository
{
    public function getAllCompanies(): Collection
    {
        return Company::all();
    }

    public function save(Company $company): Company
    {
        $company->save();
        return $company;
    }

    public function deleteCompany(int $companyId): bool {
        return $this->getCompanyById($companyId)->delete();
    }

    public function getCompanyById(int $companyId): Company
    {
        /** @var Company */
        return Company::query()->findOrFail($companyId);
    }
}
