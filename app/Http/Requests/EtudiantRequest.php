<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class EtudiantRequest extends FormRequest
{

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
            'num_etu' => 'required', // Assurez-vous que le mot de passe est requis
            'annee_entree' => 'required', // Assurez-vous que le mot de passe est requis
        ];
    }

    public function attributes(): array
    {
        return [
            'nom' => 'Le nom de l\'étudiant',
            'prenom' => 'Le prénom de l\'étudiant',
            'dateNaiss' => 'La date de naissance de l\'étudiant',
            'email' => 'Le mail de l\'étudiant',
            'tel' => 'Le téléphone de l\'étudiant',
            'num_etu' => 'Le matricule de l\'étudiant',
            'annee_entree' => 'L\'année d\'admission de l\'étudiant',
            'ecole_id' => 'L\'école de provenance de l\'étudiant',
        ];
    }

    public function passedValidation() {
        $this->merge([
            'password' => Hash::make('password'),
            'ecole_id' => $this->user('admins')->ecole_id,
        ]);
    }
}
