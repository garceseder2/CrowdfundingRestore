<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUserRequest extends Request
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
            //
            'name' => 'required|min:3',
            'lastname' => 'required|min:3',
            'id_document' => 'required|numeric|unique:users',
            'birthday' => 'required|date',
            'gender' => 'required',
            'adders_1' => 'required',
            'country' => 'required',
            'stade' => 'required',
            'city' => 'required',
            'postalcode' => 'required'
            
        ];
    }
}
