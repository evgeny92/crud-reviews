<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Pages\HomePageService;

class DefaultController extends Controller
{
    public function index(HomePageService $homePageService)
    {
        return $homePageService();
    }
}
