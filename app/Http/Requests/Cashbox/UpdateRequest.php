<?php

namespace App\Http\Requests\Cashbox;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'model' => 'sometimes|string|min:5|max:255',
            'city' => ['sometimes', 'string', 'max:50'],
            'number' => 'sometimes|numeric|min:100|max:9999'
        ];
    }
}
