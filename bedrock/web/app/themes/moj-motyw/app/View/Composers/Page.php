<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Page extends Composer
{
    protected static $views = [
        'page',
    ];

    public function with(): array
    {
        return [
            'sekcje' => get_field('sekcje') ?: [],
        ];
    }
} 