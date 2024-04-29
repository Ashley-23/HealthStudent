<?php

namespace App\Http\Requests\Auth;

use App\Models\Admin;
use Illuminate\Support\Str;
use App\Enums\UserTypesEnums;
use App\Models\Etudiant;
use App\Models\Psychologue;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'statut' => ['required', Rule::enum(UserTypesEnums::class)]
        ];
    }


    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        $admin = $psycho = $etudiant = false;

        $statut = $this->enum('statut', UserTypesEnums::class);

        switch ($statut) {
            case UserTypesEnums::ADMINISTRATEUR:
                if ($admin = Admin::query()->where('email', $this->get('email'))->first()) {
                    if (Hash::check($this->get('password'), $admin->password)) {
                        Auth::guard('admins')->login($admin);
                    }
                }
                break;
            case UserTypesEnums::PSYCHOLOGUE:
                if ($psycho = Psychologue::query()->where('email', $this->get('email'))->first()) {
                    if (Hash::check($this->get('password'), $psycho->password)) {
                        Auth::guard('psychos')->login($psycho);
                    }
                }
                break;
            case UserTypesEnums::ETUDIANT:
            default:
                if ($etudiant = Etudiant::query()->where('email', $this->get('email'))->first()) {
                    if (Hash::check($this->get('password'), $etudiant->password)) {
                        Auth::guard('etudiants')->login($etudiant);
                    }
                }
                break;
        }

        RateLimiter::clear($this->throttleKey());
    }

    public function ensureIsNotRateLimited(): void
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->string('email')) . '|' . $this->ip());
    }
}
