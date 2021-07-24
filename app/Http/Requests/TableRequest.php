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


            'number_table'          =>'required|int|max:50|unique:tables,number_table',
            'number_person'         =>'required|int|max:50|unique:tables,number_person',
            'type'                  =>'required|in:inside,outside',
            'start_at'              =>'required|after_or_equal:2021-01-01',
            'end_at'                =>'required|after:start_at',
        ];
    }

    public function messages()
    {

       return [

        'required'           => 'هذا الحقل مطلوب إدخاله',
        'unique'             => 'رقم الطاولة محجوز',
        'max'                => 'هذا الحقل يجب أن يحتوى على رقم أقل من 50',
        'after_or_equal'     => 'يرجى ادخال تاريخ في الشهر الحالي والسنة الحالية للعام',
        'after'              => 'يرجى ادخال تاريخ بعد تاريخ البداية',
       ];
       
    }


}
