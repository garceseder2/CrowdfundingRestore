<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectRequest extends Request
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
            'title_project' => 'required|min:3',
            'general_description' => 'required|min:3',
            'category_id' => 'required',
            'bussines_potential' => 'required',
            'collection_time' => 'required|numeric',
            'percentage_gain' => 'required|numeric'
            
        ];
    }
}
