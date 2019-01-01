<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
   

     public function authorize()
    {
        //return false;
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
            'First_Name'=>'Required',
            'Last_Name'=>'Required',
            'Phone'=>'Required',
            'password'=>'Required',
            'Gender'=>'Required',
            'Blood_Group'=>'Required',
            'DOB'=>'Required',
            'password'=>'Required',
            'Confirm_Password'=>'Required',
            'Address'=>'Required',
            'Type'=>'Required',
            'username'=>'Required'

        ];
    }

    public function messages(){
        return [
            'First_Name.required' => " name can't left empty",
            'Last_Name.required' => " last name can't left empty",
            'Phone.required' => " Phone can't left empty",
            'password.required' => " password can't left empty",
            'Gender.required' => " Gender can't left empty",
            'Blood_Group.required' => "Blood_Group can't left empty",
            'DOB.required' => "DOB can't left empty",
            'password.required' => "password can't left empty",
            'Confirm_Password.required' => "Confirm_Password can't left empty",
            'Address.required' => "Address can't left empty",
            'Type.required' => "Type can't left empty",          
            'username.required' => "username can't left empty"
            //'accNo.unique'  => 'all ready in used'
        ];
    }
}

