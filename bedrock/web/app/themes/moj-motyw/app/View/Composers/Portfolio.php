<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Portfolio extends Composer{
    protected static $views = [
        'front-page',
        'archive-portfolio',
        'page',
    ];

    public function with(): array
    {
        return [
            'portfolio' => new \WP_Query([
                'post_type' => 'portfolio',
                'posts_per_page' => 6,
            ]),
        ];
    }
}