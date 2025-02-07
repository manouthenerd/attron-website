<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sendContactFormRequest extends FormRequest
{
    /**
     * The URI that users should be redirected to if validation fails.
     *
     * @var string
     */
    protected $redirect = '/contact#contact-form';

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
            'contact'  => ['required', 'digits_between:10,14'],
            'email'    => ['email', 'required'],
            'message'  => ['required', 'min:20']
        ];
    }

    public function messages()
    {
        return [
            'username.required'         => 'Ce champs est obligatoire',
            'contact.required'          => 'Ce champs est obligatoire',
            'email.required'            => 'Ce champs est obligatoire',
            'message.required'          => 'Ce champs est obligatoire',
            'message.required'          => 'Le message doit contenir au moins :min caractères',
            'contact.digits_between'    => 'Le téléphone doit contenir au moins :min chiffres',
            'email.email'               => 'Veuillez saisir une adresse email valide.'
        ];
    }
}
