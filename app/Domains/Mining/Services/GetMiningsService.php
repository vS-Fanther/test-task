<?php

namespace App\Domains\Mining\Services;

use App\Domains\Mining\Application\Api\Requests\GetMiningsRequest;
use App\Domains\Mining\Repositories\MiningDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetMiningsService
{
    public function __construct(
        private readonly MiningDbRepository $miningDbRepository
    ) {
    }

    public function getMinings(GetMiningsRequest $getMiningsRequest): Collection
    {
        return $this->miningDbRepository->getAllMinings();
    }
}
