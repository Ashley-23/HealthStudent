<?php
namespace App\Enums;


enum UserTypesEnums: string
{
    case ETUDIANT = 'Etudiant';
    case ADMINISTRATEUR = 'Administrateur';
    case PSYCHOLOGUE = 'Psychologue';

    static function values(): array
    {
        $values = [];
        foreach (static::cases() as $case) {
            $values[] = $case;
        }
        return $values;
    }
}
