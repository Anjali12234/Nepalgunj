<?php

namespace App\Enum;

enum ProgramEnum: string
{
    case Science = 'Science';
    case Commerce = 'Commerce';
    case Arts = 'Arts';
    case HM = 'HM';
    case BCA = 'BCA';
    case CSIT = 'CSIT';
    case BIT = 'BIT';
    
    public function label(): string
    {
        return self::getLabel($this);
    }

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::Science => 'Science',
            self::Commerce => 'Commerce',
            self::Arts => 'Arts',
            self::HM => 'HM',
            self::BCA => 'BCA',
            self::CSIT => 'CSIT',
            self::BIT => 'BIT',
            
          
        };
    }
}
