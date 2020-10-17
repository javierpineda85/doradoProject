<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Profile_profStoreRequest extends FormRequest
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
            'user_id'           =>'integer',
            'dni'               =>'required|integer',
            'cuil'              =>'required|string',
            'birthday'          =>'required|date',
            'street'            =>'required|string',
            'street_number'     =>'required|integer',
            'locality'          =>'string',
            'city'              =>'string',
            'phone'             =>'required|string',
            'specialty'         =>'required|string',
            'matricula'         =>'required|string',
            'venc_matricula'    =>'nullable|date',
            'rnp'               =>'required|string',
            'venc_rnp'          =>'required|date',
                        
            
        ];

        if($this->get('file'))
            $rules = array_merge($rules,['file' => 'mimes:jpg,jpeg,png']);
        return $rules;
    }
}
