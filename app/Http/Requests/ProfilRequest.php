<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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
            'username' => 'required|min:3|alpha_dash|unique:users,username,'.$this->user()->id,
            'name'  => 'required|max:150|regex:/(^[A-Za-z ]+$)+/',
            'email' => 'required|email|unique:users,email,'.$this->user()->id,
        ];
    }
}
