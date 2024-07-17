<?php

namespace App\Domains\Mining\Application\Api\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $companyId
 * @property Carbon $date
 * @property int $minedWeight
 */
class EditMiningRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'companyId' => ['nullable', 'integer', 'exists:companies,id'],
            'date' => ['nullable'],
            'minedWeight' => ['nullable', 'integer'],
        ];
    }
}
