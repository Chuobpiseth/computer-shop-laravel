<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Laptop;
use App\Models\Desktop;
use App\Models\Slide;

class DashboardController extends Controller
{
    public function index()
    {
        $laptopCount = Laptop::count();
        $desktopCount = Desktop::count();
        $slideCount = Slide::count();

        return view('backend.pages.admin', compact('laptopCount', 'desktopCount','slideCount'));
    }
}
