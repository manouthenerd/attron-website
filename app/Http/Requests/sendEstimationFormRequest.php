<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sendEstimationFormRequest extends FormRequest
{

    /**
     * The URI that users should be redirected to if validation fails.
     *
     * @var string
     */
    protected $redirect = '/#text';


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
            "company"       => ['required'],
            "activity"      => ['required', 'string'],
            "name"          => ['required', 'string'],
            "contact"       => ['required', 'min:8'],
            "workers"       => ['required'],
            "message"       => ['required', 'min:20'],
            'email'         => ['email'],
            'date'          => ['date', 'required']
        ];
    }

    public function messages()
    {
        return [
            'company.required'              => 'Ce champ est obligatoire',
            'other_company.required_if'     => 'Ce champ est obligatoire',
            'other_company.string'          => 'Le contenu doit être une chaîne de caractère.',
            'name.required'                 => 'Ce champ est obligatoire',
            'contact.required'              => 'Ce champ est obligatoire',
            'contact.min'                   => 'Le contact doit être d\'au moins :min caractères',
            'workers.required'              => 'Ce champ est obligatoire',
            'message.required'              => 'Ce champ est obligatoire',
            'message.min'                   => 'Le corps du message doit être d\'au moins :min caractères.',
            'email.required'                => 'Votre adresse email n\'est pas valide'
        ];
    }
}
