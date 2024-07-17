<?php

namespace App\Domains\Mining\Application\Actions;


use App\Domains\Mining\Models\Mining;
use App\Domains\Mining\Models\DTOs\EditMiningDTO;
use App\Domains\Mining\Repositories\MiningDbRepository;

class EditMiningAction
{
    public function __construct(
        private readonly MiningDbRepository $miningDbRepository
    ) {
    }

    public function execute(Mining $mining, EditMiningDTO $editMiningDTO): Mining
    {
        $mining->company_id = $editMiningDTO->getCompanyId();
        $mining->date = $editMiningDTO->getDate();
        $mining->mined_weight = $editMiningDTO->getMinedWeight();

        return $this->miningDbRepository->save($mining);
    }
}
