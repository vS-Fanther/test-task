<?php

namespace App\Domains\Mining\Services;

use App\Domains\Mining\Application\Actions\EditMiningAction;
use App\Domains\Mining\Application\Api\Requests\EditMiningRequest;
use App\Domains\Mining\Models\DTOs\EditMiningDTO;
use App\Domains\Mining\Models\Mining;
use App\Domains\Mining\Repositories\MiningDbRepository;
use Carbon\Carbon;

class EditMiningService
{
    public function __construct(
        private readonly MiningDbRepository $miningDbRepository,
        private readonly EditMiningAction   $editMiningAction
    ) {
    }

    public function editMining(EditMiningRequest $editMiningRequest, $id): Mining
    {
        $miningById = $this->miningDbRepository->getMiningById($id);
        $editMiningDTO = new EditMiningDTO(
            $editMiningRequest->companyId ?? $miningById->company_id,
            Carbon::parse($editMiningRequest->date) ?? $miningById->date,
            $editMiningRequest->minedWeight ?? $miningById->mined_weight
        );

        return $this->editMiningAction->execute($miningById, $editMiningDTO);
    }
}
