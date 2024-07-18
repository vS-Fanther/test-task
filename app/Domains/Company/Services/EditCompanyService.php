<?php

namespace App\Domains\Company\Services;

use App\Domains\Company\Application\Actions\EditCompanyAction;
use App\Domains\Company\Application\Api\Requests\EditCompanyRequest;
use App\Domains\Company\Models\Company;
use App\Domains\Company\Models\DTOs\EditCompanyDTO;
use App\Domains\Company\Repositories\CompanyDbRepository;

class EditCompanyService
{
    public function __construct(
       private readonly CompanyDbRepository $companyDbRepository,
        private readonly EditCompanyAction $editCompanyAction
    ) {
    }

    public function editCountry(EditCompanyRequest $editCompaniesRequest, $id): Company
    {
        $companyById = $this->companyDbRepository->getCompanyById($id);
        $editCompanyDTO = new EditCompanyDTO(
            $editCompaniesRequest->name??$companyById->name,
            $editCompaniesRequest->email??$companyById->email,
            $editCompaniesRequest->companyId??$companyById->country_id
        );

        return $this->editCompanyAction->execute($companyById, $editCompanyDTO);
    }
}
