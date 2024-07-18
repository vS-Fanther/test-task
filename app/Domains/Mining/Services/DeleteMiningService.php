<?php

namespace App\Domains\Mining\Services;

use App\Domains\Mining\Application\Api\Requests\DeleteMiningRequest;
use App\Domains\Mining\Repositories\MiningDbRepository;

class DeleteMiningService
{
    public function __construct(
        private readonly MiningDbRepository $miningDbRepository
    ) {
    }

    public function deleteMining(DeleteMiningRequest $deleteCountryRequest): bool
    {
        return $this->miningDbRepository->deleteMining($deleteCountryRequest->id);
    }
}
