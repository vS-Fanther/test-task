<?php

namespace App\Domains\Mining\Application\Api\Controllers;

use App\Domains\Mining\Application\Api\Requests\DeleteMiningRequest;
use App\Domains\Mining\Services\DeleteMiningService;
use App\Http\Controllers\Controller;

class DeleteMiningController extends Controller
{
    public function __construct(
        private DeleteMiningService $deleteMiningService
    ) {
    }

    public function deleteMining(DeleteMiningRequest $deleteMiningRequest): int
    {
        $this->deleteMiningService->deleteMining($deleteMiningRequest);

        return $deleteMiningRequest->id;
    }
}
