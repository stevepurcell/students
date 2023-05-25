<?php

namespace App\Enums;

enum RelationType: string
{
    case MOTHER = 'Mother';
    case FATHER = 'Father';
    case SISTER = 'Sister';
    case BROTHER = 'Brother';

    public static function getValues(): array
    {
        return array_column(RelationType::cases(), 'value');
    }
}
