<?php

namespace App\Domains\Mining\Repositories;

use App\Domains\Mining\Models\Mining;
use Illuminate\Database\Eloquent\Collection;

class MiningDbRepository
{
    public function getAllMinings(): Collection
    {
        return Mining::all();
    }

    public function save(Mining $mining): Mining
    {
        $mining->save();
        return $mining;
    }

    public function deleteMining(int $miningId): bool {
        return $this->getMiningById($miningId)->delete();
    }

    public function getMiningById(int $miningId): Mining
    {
        /** @var Mining */
        return Mining::query()->findOrFail($miningId);
    }
}
