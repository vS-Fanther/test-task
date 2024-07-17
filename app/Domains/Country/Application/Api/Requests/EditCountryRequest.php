<?php

namespace App\Domains\Country\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $plan
 */
class EditCountryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string'],
            'plan' => ['nullable', 'integer'],
        ];
    }
}
