<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SupplierRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:35',
            'location' => 'required|max:40',
            'email' => 'email|max:50',
            'telephone1' => 'required|max:10',
            'telephone2' => 'sometimes|max:10',
            // 'date_added' => 'date|before:',
            'is_enabled' => 'required'
        ];
    }
}
