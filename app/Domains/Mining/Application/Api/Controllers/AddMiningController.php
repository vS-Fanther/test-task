<?php

namespace App\Domains\Mining\Application\Api\Controllers;

use App\Domains\Mining\Application\Api\Requests\AddMiningRequest;
use App\Domains\Mining\Application\Api\Resources\MiningResource;
use App\Domains\Mining\Services\AddMiningService;
use App\Http\Controllers\Controller;

class AddMiningController extends Controller
{
    public function __construct(
        private AddMiningService $addMiningService
    ) {
    }

    public function addMining(AddMiningRequest $addMiningRequest): MiningResource
    {
        $data = $this->addMiningService->addMining($addMiningRequest);
        return new MiningResource($data);
    }
}
