<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TableRequest extends FormRequest
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


            'number_table'          =>'required|int|max:50',
            'number_person'         =>'required|int',
            'type'                  =>'required|in:inside,outside',
            'start_at'              =>'required',
            'end_at'                =>'required',
        ];
    }

    public function messages()
    {
       return [

        'required' => 'هذا الحقل مطلوب إدخاله',
        'max' => 'هذا الحقل يجب أن يحتوى على رقم أقل من 50',

       ];
    }


}
