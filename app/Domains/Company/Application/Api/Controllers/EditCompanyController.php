<?php

namespace App\Domains\Company\Application\Api\Controllers;

use App\Domains\Company\Application\Api\Requests\EditCompanyRequest;
use App\Domains\Company\Application\Api\Resources\CompanyResource;
use App\Domains\Company\Services\EditCompanyService;
use App\Http\Controllers\Controller;

class EditCompanyController extends Controller
{
    public function __construct(
        private EditCompanyService $editCompanyService
    ) {
    }

    public function editCompany(EditCompanyRequest $editCompanyRequest, $id): CompanyResource
    {
        $data = $this->editCompanyService->editCountry($editCompanyRequest, $id);
        return new CompanyResource($data);
    }
}
