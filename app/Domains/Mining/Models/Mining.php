<?php

namespace App\Domains\Mining\Models;

use App\Domains\Mining\Models\DTOs\AddMiningDTO;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $company_id
 * @property Carbon $date
 * @property int $mined_weight
 */
class Mining extends Model
{
    public function fillFromDTO(AddMiningDTO $addMiningDTO): void
    {
        $this->company_id = $addMiningDTO->getCompanyId();
        $this->date = $addMiningDTO->getDate();
        $this->mined_weight = $addMiningDTO->getMinedWeight();
    }
}
