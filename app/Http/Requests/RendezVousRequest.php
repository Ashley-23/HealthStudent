<?php

namespace App\Http\Requests;

use App\Enums\RendezVousStatusEnum;
use App\Http\Controllers\EtudiantVueController;
use App\Models\Psychologue;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RendezVousRequest extends FormRequest
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
            'psychologue_id' => ['required', 'exists:' . Psychologue::class . ',id'],
            'date' => ['required', 'date'],
            'choix' => ['required', 'integer', Rule::in(EtudiantVueController::$allHours)],
        ];
    }

    public function attributes(): array
    {
        return [
            'date' => 'La date de rendez-vous',
            'psychologue_id' => 'Le psychologue choisi',
            'choix' => 'L\'heure de début du rendez-vous',
        ];
    }

    public function messages(): array
    {
        return [
            'choix.between' => ":attribute doit être comprise entre :minh et :maxh."
        ];
    }

    public function passedValidation(): void
    {
        $this->merge([
            'heure_fin' => $this->integer('choix') + 1,
            'heure_debut' => $this->get('choix'),
            'active' => false,
            'status' => RendezVousStatusEnum::SOUMIS->value,
            'etudiant_id' => auth('etudiants')->user()->id
        ]);
    }
}
