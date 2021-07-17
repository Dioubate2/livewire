<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFormUser extends FormRequest
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
            'nom'=>['required', 'string', 'alpha'],
            'prenom' =>'required',
            'sexe' =>'required',
            'telephone' =>['required', 'unique:users'],
            'adresse'=>'required',
            'password' =>'required',
            'pieceIdentite' =>['required','string', 'unique:users'],
            'email' =>['required', 'string', 'unique:users'],
            'role' =>['required', 'exists:App\Models\Role,id'],
            'photo' =>'required',

        ];
    }
}
