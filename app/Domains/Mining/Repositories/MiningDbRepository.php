<?php

namespace App\Domains\Mining\Repositories;

use App\Domains\Mining\Models\Mining;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

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

    public function getMiningsForMonth(int $month): \Illuminate\Support\Collection
    {
        return DB::table('countries as c')
            ->join('companies as co', 'c.id', '=', 'co.country_id')
            ->join('minings as m', 'co.id', '=', 'm.company_id')
            ->select('c.name as Country', DB::raw('SUM(m.mined_weight) as Mined'), 'c.plan as Plan')
            ->whereRaw('MONTH(m.date) = ?', [$month])
            ->groupBy('c.name', 'c.plan')
            ->havingRaw('SUM(m.mined_weight) > c.plan')
            ->orderBy('Mined', 'desc')
            ->get();
    }
}
