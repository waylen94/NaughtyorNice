<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }
    public function testing_yanan()
    {
        return view('testing.testing_line_chart');
    }
    public function testing()
    {
        return view('testing.testing_line_chart');
    }
}
