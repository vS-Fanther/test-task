<?php

namespace App\Domains\Mining\Application\Api\Controllers;


use App\Domains\Mining\Application\Api\Requests\EditMiningRequest;
use App\Domains\Mining\Application\Api\Resources\MiningResource;
use App\Domains\Mining\Services\EditMiningService;
use App\Http\Controllers\Controller;

class EditMiningController extends Controller
{
    public function __construct(
        private EditMiningService $editMiningService
    ) {
    }

    public function editMining(EditMiningRequest $editMiningRequest, $id): MiningResource
    {
        $data = $this->editMiningService->editMining($editMiningRequest, $id);
        return new MiningResource($data);
    }
}
