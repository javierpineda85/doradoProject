<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Profile_profesStoreRequest extends FormRequest
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
            'user_id'           =>'required|integer',
            'dni'               =>'required|integer',
            'cuil'              =>'required|integer',
            'birthday'          =>'required|date',
            'street'            =>'required|integer',
            'street_number'     =>'required|integer',
            'street_house'      =>'required|integer',
            'phone'             =>'required|string',
            'file'              =>'required|integer',
            'specialty'         =>'required|string',
            'matricula'         =>'required|string',
            'venc_matricula'    =>'nullable|date',
            'rnp'               =>'required|string',
            'venc_rnp'          =>'required|date',
            'baja'              =>'required|boolean'            
            
        ];

        if($this->get('file'))
            $rules = array_merge($rules,['file' => 'mimes:jpg,jpeg,png']);
        return $rules;
    }
}
