<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


//This will be applied after when we add Admin panel
class UpdateErrorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lang' => 'required',//язык ru ua en pl
            'valuename' => 'required',// имя аттрибута -  contacts_text, contacts, about_text, about... см массив
            'type' => 'required',//тип поля - json, string
            'value' => 'required' //значения аттрибута
        ];
    }
}
