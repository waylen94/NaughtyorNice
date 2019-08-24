<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PagesController extends Controller
{
    public function root()
    {  
        $json_storages = DB::table('json_storages')->find(1);
        $json_storages_page = DB::table('json_storages')->paginate(3);
        
        return view('pages.root',compact("json_storages","json_storages_page"));
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
