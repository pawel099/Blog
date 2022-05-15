<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
                    'nick' =>  'required|max:500',
                    'email' => 'required|max:500',
                    'naglowek' => 'required|max:20',
                    'tytul' => 'required|max:500',
					'tresc' => 'required|max:500'
 

        ];
    }
}


