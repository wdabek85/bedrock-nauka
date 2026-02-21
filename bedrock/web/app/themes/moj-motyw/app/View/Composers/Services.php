<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Services extends Composer
{
    protected static $views = [
        'front-page',
    ];

    public function with(): array
    {
        return [
            'uslugi' => get_field('uslugi') ?: [],
        ];
    }
}