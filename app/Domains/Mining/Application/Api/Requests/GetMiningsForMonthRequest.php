<?php

namespace App\Domains\Mining\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $month
 */
class GetMiningsForMonthRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'month' => ['required', 'integer', 'between:1,12']
        ];
    }
}
