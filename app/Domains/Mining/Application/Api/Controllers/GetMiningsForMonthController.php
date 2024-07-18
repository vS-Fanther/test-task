<?php

namespace App\Domains\Mining\Application\Api\Controllers;

use App\Domains\Mining\Application\Api\Requests\GetMiningsForMonthRequest;
use App\Domains\Mining\Application\Api\Resources\MiningsForMonthResource;
use App\Domains\Mining\Services\GetMiningsForMonthService;
use App\Http\Controllers\Controller;

class GetMiningsForMonthController extends Controller
{
    public function __construct(
        private readonly GetMiningsForMonthService $getMiningsForMonthService
    ) {
    }

    public function getMiningsForMonth(GetMiningsForMonthRequest $getMiningsForMonthRequest): MiningsForMonthResource
    {
        $data = $this->getMiningsForMonthService->getMiningsForMonth($getMiningsForMonthRequest);
        return new MiningsForMonthResource($data);
    }
}
