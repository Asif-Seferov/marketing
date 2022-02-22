<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'category_id' => 'required|integer',
            'name' => 'required|min:3|max:30',
            'desc' => 'required|min:3|max:50',
            'content' => 'required|min:3|max:1500',
        ];
    }
    public function messages(){
        return [
            'category_id.required' => 'Kateqoriya sahesi bos buraxila bilmez',
            'category_id.integer' => 'Kateqoriya sahesi yanliz reqem deyerden ibaret ola biler',
            'name.required' => 'Ad sahesi bos buraxila bilmez',
            'name.min' => 'Ad sahesi minimum 3 simvoldan ibaret ola biler',
            'name.max' => 'Ad sahesi max 30 simvol ola biler',
            'desc.required' => 'Aciqlama sahesi bos buraxila bilmez',
            'desc.min' => 'Aciqlama sahesi min 3 simvoldan ibaret ola biler',
            'desc.max' => 'Aciqlama sahesi maksimum 50 simvoldan ibaret ola biler',
        ];
    }
}
