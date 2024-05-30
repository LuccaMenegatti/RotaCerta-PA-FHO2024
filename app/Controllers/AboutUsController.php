<?php

namespace App\Controllers;

class AboutUsController extends BaseController
{
    public function index(): string
    {
        return view('aboutUs');
    }
}
