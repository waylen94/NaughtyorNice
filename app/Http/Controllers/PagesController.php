<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PagesController extends Controller
{
    public function root()
    {  
        $json_storages = DB::table('json_storages')->find(1);
        return view('pages.root',compact("json_storages"));
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
