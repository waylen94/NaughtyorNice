<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JsonStorage;

class JsonStoragesController extends Controller
{
    public function show(JsonStorage $jsonstorage)
    {
        $json_storages = $jsonstorage;
        $json_storages_page = DB::table('json_storages')->paginate(3);
        
        return view('pages.root',compact("json_storages","json_storages_page"));
    }
}
