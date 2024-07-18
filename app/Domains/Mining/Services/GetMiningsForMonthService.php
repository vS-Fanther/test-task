<?php

namespace App\Domains\Mining\Services;

use App\Domains\Mining\Application\Api\Requests\GetMiningsForMonthRequest;
use App\Domains\Mining\Repositories\MiningDbRepository;
use Illuminate\Database\Eloquent\Collection;

class GetMiningsForMonthService
{
    public function __construct(
        private readonly MiningDbRepository $miningDbRepository
    ) {
    }

    public function getMiningsForMonth(GetMiningsForMonthRequest $getMiningsForMonthRequest): \Illuminate\Support\Collection
    {
        return $this->miningDbRepository->getMiningsForMonth(
            $getMiningsForMonthRequest->month
        );
    }
}
