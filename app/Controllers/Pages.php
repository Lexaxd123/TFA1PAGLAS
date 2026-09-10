<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        // Loads app/Views/templates/nav.php and app/Views/pages/home.php
        return view('templates/nav') . view('pages/home');
    }

    public function about(): string
    {
        // Loads app/Views/templates/nav.php and app/Views/pages/about.php
        return view('templates/nav') . view('pages/about');
    }
}