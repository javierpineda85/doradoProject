<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
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
        $rules = [
            'group_id'           =>'required|integer',
            'name'               =>'required|string',
            'lastName'           =>'required|string',
            'phone'              =>'required|string',
            'email'              =>'unique|required|string',
            'baja'               =>'required|in:DRAFT,PUBLISHED' 
            
        ];
    }
}
