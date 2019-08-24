<?php

namespace App\Http\Controllers;

use App\Models\JsonStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JsonStoragesController extends Controller
{
    public function show($id)
    {
        $json_storages = DB::table('json_storages')->find($id);
        $json_storages_page = DB::table('json_storages')->paginate(3);
        
        return view('pages.root',compact("json_storages","json_storages_page"));
    }
}
