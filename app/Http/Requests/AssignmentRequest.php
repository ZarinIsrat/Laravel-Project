<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // public function rules()
    // {
    //     return [
    //         'work'=>'Required',
    //         'aCourse'=>'Required',
    //         'course'=>'Required',
    //         'instructor'=>'Required',
    //         'syllabus'=>'Required',
    //         'time'=>'Required',
    //         'tDetails'=>'Required',
    //         'date'=>'Required'
            
    //         //
    //     ];
    // }
    //  public function messages(){
    //     return [
    //         'work.required' => " it left empty",
    //         'aCourse.required' => " course can't left empty",
    //         'course.required' => "course name can't left empty",
    //         'instructor.required' => "instructor name can't left empty",
    //         'syllabus.required' => "syllabus name can't left empty",
    //         'time.required' => " time can't left empty",
    //         'tDetails.required' => "Details can't left empty",
    //         'date.required' => " date can't left empty"
    //         // 'password.required' => " password can't left empty",
    //         // 'username.required' => "username can't left empty"

    //     ];
    // }
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
            'work'=>'Required',
            'aCourse'=>'Required',
            'date'=>'Required'
           
        ];
    }

    public function messages(){
        return [
            'work.required' => " it can not  left empty",
            'aCourse.required' => " course can't left empty",
            'date.required' => " date can't left empty"
           
        ];
    }
}
