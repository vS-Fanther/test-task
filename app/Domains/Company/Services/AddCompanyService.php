<?php

namespace App\Domains\Company\Services;

use App\Domains\Company\Application\Actions\AddCompanyAction;
use App\Domains\Company\Application\Api\Requests\AddCompanyRequest;
use App\Domains\Company\Models\Company;
use App\Domains\Company\Models\DTOs\AddCompanyDTO;

class AddCompanyService
{
    public function __construct(
        private readonly AddCompanyAction $addCountryAction
    )
    {
    }

    public function addCountry(AddCompanyRequest $addCompaniesRequest): Company
    {
        return $this->addCountryAction->execute(new AddCompanyDTO(
            $addCompaniesRequest->name,
            $addCompaniesRequest->email,
            $addCompaniesRequest->countryId
        ));
    }
}
