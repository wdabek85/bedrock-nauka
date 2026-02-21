<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Hero extends Composer{
    protected static $views = [
        'front-page',
    ];

    public function with(): array
    {
        return [
            'sekcjeHero' => get_field('top-hero') ?: [],
            'bottomFirst'    => get_field('bottom-hero')['first'] ?? [],
            'bottomBenefits' => get_field('bottom-hero')['benefits'] ?: [],
        ];
    }
}