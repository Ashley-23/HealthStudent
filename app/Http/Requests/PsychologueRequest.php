<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class PsychologueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nom' => ['required', 'min:3'], // Assurez-vous que le statut est requis
            'prenom' => ['required', 'min:3'], // Assurez-vous que le nom d'utilisateur est requis
            'dateNaiss' => ['required'], // Assurez-vous que le mot de passe est requis
            'email' => ['required', 'email'], // Assurez-vous que le mot de passe est requis
            'tel' => ['required', 'min:10', 'max:10'], // Assurez-vous que le mot de passe est requis
            'num_psy' => 'required', // Assurez-vous que le mot de passe est requis
            'annee_entree' => 'required', // Assurez-vous que le mot de passe est requis
        ];
    }

    public function attributes(): array
    {
        return [
            'nom' => 'Le nom du psychologue',
            'prenom' => 'Le prénom du psychologue',
            'dateNaiss' => 'La date du naissance de psychologue',
            'email' => 'Le mail du psychologue',
            'tel' => 'Le téléphone du psychologue',
            'num_psy' => 'Le matricule du psychologue',
            'annee_entree' => 'L\'année d\'entrée du psychologue',
            'ecole_id' => 'L\'école de provenance du psychologue',
        ];
    }

    public function passedValidation() {
        $this->merge([
            'password' => Hash::make('password'),
            'ecole_id' => $this->user('admins')->ecole_id,
        ]);
    }
}
