<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:50',
            'firstname' => 'required|string|min:2|max:50',
            'birthdate' => 'required|string|min:8',
            'sexe' => 'required|string|in:masculin,feminin',
            'email' => 'required|string|email|unique:users,email|min:2 |max:255',
            'password' => 'required|min:7',
        ];
    }

    /**
     * Message  d'erreur pour les champs du formulaire.
    */
    public function messages(){
        return[
            'name.required' => 'Le champs nom est obligatoire',
            'name.min' => 'Le champs nom doit avoir plus de 2 caractere',
            'name.max' => 'Le champs nom doit avoir moins de 255 caractere',

            'firstname.required' => 'Le champs prenom est obligatoire',
            'firstname.min' => 'Le champs prenom doit avoir plus de 2 caractere',
            'firstname.max' => 'Le champs prenom doit avoir moins de 255 caractere',

            'sexe.required' => 'Vous devriez choisir un sexe',
            'sexe.in' => 'Le sexe devra etre soit Homme ou Femme',

            'email.required' => 'Adresse email est necessaire',
            'email.unique' => 'Adresse Email deja utilise',
            'email.email' => 'Email non valide',

            'password.required' => 'Un mot de passe est requis',
            'password.min' => 'Votre mot de passe doit avoir au moins 7 caractere',
        ];
    }
}
