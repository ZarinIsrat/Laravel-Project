<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
             'work'=>'Required',
            
            'tDetails'=>'Required',
            'date'=>'Required'
            
        ];
    }
    public function messages(){
        return [
            'work.required' => " it left empty",
            'tDetails.required' => "Details can't left empty",
            'date.required' => " date can't left empty"
            // 'password.required' => " password can't left empty",
            // 'username.required' => "username can't left empty"

        ];
    }
}
