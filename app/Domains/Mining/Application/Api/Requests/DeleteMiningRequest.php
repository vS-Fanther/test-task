<?php

namespace App\Domains\Mining\Application\Api\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int $id
 */
class DeleteMiningRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id' => ['required', 'integer', 'exists:minings,id']
        ];
    }
}
