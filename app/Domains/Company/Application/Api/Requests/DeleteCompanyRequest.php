<?php

namespace App\Domains\Company\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $id
 */
class DeleteCompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:companies,id']
        ];
    }
}
