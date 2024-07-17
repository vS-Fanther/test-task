<?php

namespace App\Domains\Mining\Application\Api\Controllers;

use App\Domains\Mining\Application\Api\Requests\GetMiningsRequest;
use App\Domains\Mining\Services\GetMiningsService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GetMiningsController extends Controller
{
    public function __construct(
        private GetMiningsService $getMiningsService
    ) {
    }

    public function getMinings(GetMiningsRequest $getMiningsRequest): ResourceCollection
    {
        $data = $this->getMiningsService->getMinings($getMiningsRequest);
        return ResourceCollection::make($data);
    }
}
