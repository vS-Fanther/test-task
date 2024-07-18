<?php

namespace App\Domains\Mining\Application\Api\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $companyId
 * @property Carbon $date
 * @property int $minedWeight
 */
class AddMiningRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'companyId' => ['required', 'integer', 'exists:companies,id'],
            'date' => ['required', 'date'],
            'minedWeight' => ['required', 'integer'],
        ];
    }
}
