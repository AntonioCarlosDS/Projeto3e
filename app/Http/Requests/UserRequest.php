<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\UserRequest;


class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
   
       
    }

    public function messages(): array{

        return[

            'name.required' => 'O nome é obrigatório!',
            'data.required' => 'A data de check-in é obrigatória!'

        ];
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userID = $this->route('user');

        return [
            'name' => 'required',
            'date' => 'required',
       'email' => 'required|email|unique:users,email,' . ($userID? $userID ->id : null),
            'password' => 'required|min:6',
        ];
        
    }
}
