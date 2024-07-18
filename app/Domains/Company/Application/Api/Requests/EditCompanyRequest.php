<?php

namespace App\Domains\Company\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $email
 * @property int $countryId
 */
class EditCompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string'],
            'email' => ['nullable', 'string'],
            'countryId' => ['nullable', 'integer'],
        ];
    }
}
