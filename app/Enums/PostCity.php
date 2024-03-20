<?php

namespace App\Enums;

enum PostCity: string
{
    case ALL = 'all';
    case MILAN = 'milan';
    case BERLIN = 'berlin';
    case LONDON = 'london';
    case MADRID = 'madrid';
    case PARIS = 'paris';

    public function getLabel(): string
    {
        return match ($this) {
            self::ALL => trans('app.all'),
            self::MILAN => trans('app.milan'),
            self::BERLIN => trans('app.berlin'),
            self::LONDON => trans('app.london'),
            self::MADRID => trans('app.madrid'),
            self::PARIS => trans('app.paris'),
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::ALL => '#000000',
            self::MILAN => '#4D9CF3',
            self::BERLIN => '#D22720',
            self::LONDON => '#626260',
            self::MADRID => '#E5C558',
            self::PARIS => '#7A46A8',
        };
    }
}
