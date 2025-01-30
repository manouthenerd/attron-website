<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required'],
            'contact'  => ['required', 'min:10'],
            'email'    => ['email', 'required'],
            'message'  => ['required']
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Ce champs est requis',
            'contact.required' => 'Ce champs est requis',
            'email.required' => 'Ce champs est requis',
            'message.required' => 'Ce champs est requis',
            'contact.min'       => 'Le téléphone doit contenir au moins :min chiffres',
            'email.email'       => 'Veuillez saisir un email valide.'
        ];
    }
}
