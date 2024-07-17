<?php

namespace App\Domains\Mining\Services;

use App\Domains\Mining\Application\Actions\AddMiningAction;
use App\Domains\Mining\Application\Api\Requests\AddMiningRequest;
use App\Domains\Mining\Models\Mining;
use App\Domains\Mining\Models\DTOs\AddMiningDTO;
use Carbon\Carbon;

class AddMiningService
{
    public function __construct(
        private readonly AddMiningAction $addMiningAction
    )
    {
    }

    public function addMining(AddMiningRequest $addMiningRequest): Mining
    {
        return $this->addMiningAction->execute(new AddMiningDTO(
            $addMiningRequest->companyId,
            Carbon::parse($addMiningRequest->date),
            $addMiningRequest->minedWeight
        ));
    }
}
