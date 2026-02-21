<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Technologies extends Composer
{
    protected static $views = [
        'front-page',
    ];

    public function with(): array
    {
        return [
            'technologie' => get_field('technologie') ?: [],
        ];
    }
}