<?php

namespace App\Domains\Country\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $plan
 */
class AddCountryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'plan' => ['required', 'integer'],
        ];
    }
}
