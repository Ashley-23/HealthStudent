<?php

namespace App\Enums;

enum RendezVousStatusEnum: string
{
    case SOUMIS = 'Soumis';
    case VALIDE = 'Validé';
    case DECLINE = 'Décliné';

    static function values(): array
    {
        $values = [];
        foreach (static::cases() as $case) {
            $values[] = $case->value;
        }
        return $values;
    }
}
