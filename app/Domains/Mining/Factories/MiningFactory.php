<?php

namespace App\Domains\Mining\Factories;

use App\Domains\Mining\Models\Mining;

class MiningFactory
{
    public function getMiningEntity(): Mining
    {
        return new Mining();
    }
}
