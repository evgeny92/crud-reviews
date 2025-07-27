<?php

namespace App\Services\Pages;

use App\Models\Review;

class HomePageService
{
    public function __invoke()
    {
        $view = 'front.pages.index';

        $reviews = Review::query('is_approved', 1)
            ->where('is_active', 1)
            ->orderByDesc('created_at')
            ->limit(6)
            ->get();

        $meta = collect([]);
        $meta->meta_static = config('custom.front.default_meta_title');

        return view($view, get_defined_vars());
    }
}
