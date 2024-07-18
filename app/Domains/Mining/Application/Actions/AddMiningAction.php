<?php

namespace App\Domains\Mining\Application\Actions;


use App\Domains\Mining\Factories\MiningFactory;
use App\Domains\Mining\Models\Mining;
use App\Domains\Mining\Models\DTOs\AddMiningDTO;
use App\Domains\Mining\Repositories\MiningDbRepository;

class AddMiningAction
{
    public function __construct(
        private readonly MiningFactory      $miningFactory,
        private readonly MiningDbRepository $miningDbRepository
    ) {
    }

    public function execute(AddMiningDTO $addMiningDTO): Mining
    {
        $mining = $this->miningFactory->getMiningEntity();
        $mining->fillFromDTO($addMiningDTO);

        return $this->miningDbRepository->save($mining);
    }
}
