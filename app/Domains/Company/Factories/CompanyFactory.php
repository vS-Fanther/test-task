<?php

namespace App\Domains\Company\Factories;

use App\Domains\Company\Models\Company;

class CompanyFactory
{
    public function getCompanyEntity(): Company
    {
        return new Company();
    }
}
