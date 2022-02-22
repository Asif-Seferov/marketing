<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Ad sahesi bos buraxila bilmez',
            'name.min' => 'Ad sahesi minimum 3 simvoldan artiq olmalidir',
            'name.max' => 'Ad sahesi 30 simvoldan artiq ola bilmez',
        ];
    }
}
