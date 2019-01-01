<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
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
            
            'course'=>'Required',
            'instructor'=>'Required',
            'syllabus'=>'Required',
            'time'=>'Required' ,         
            'date'=>'Required'
            
            //
        ];
    }
     public function messages(){
        return [
            
            'course.required' => "course name can't left empty",
            'instructor.required' => "instructor name can't left empty",
            'syllabus.required' => "syllabus name can't left empty",         
            'date.required' => " date can't left empty",
            'time.required' => "time can't left empty",    
            
        ];
    }
}
