<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username'=>'required',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required'=>'Vous devez remplir le champ Login',
            'password.required'=>'Vous devez remplir le champ mot de passe',
        ];
    }
}
