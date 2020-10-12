<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoriesStoreRequest extends FormRequest
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
            'user_id'        =>'required|integer',
            'profile_kid_id' =>'required|integer',
            'priority'       =>'required',
            'status'         =>'required|in:DRAFT,PUBLISHED'

        ];
    }
}
