<?php

namespace App\Domains\Company\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $email
 * @property int $countryId
 */
class AddCompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'countryId' => ['required', 'integer', 'exists:countries,id'],
        ];
    }
}
