<?php

namespace App\Domains\Country\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $id
 */
class DeleteCountryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:countries,id']
        ];
    }
}
