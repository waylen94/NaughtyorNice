<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Models\JsonStorage;

class VisualizationNetworkController extends Controller
{
    public function upload(Request $request, JsonStorage $jsonstorage)
    {    
        $jsonstorage->fill($request->all());  
        $path = $request->file('file_content')->store('file_content');
        $contents = Storage::get($path);
        $jsonstorage->file_content = $contents;
        Storage::delete($path);
        $jsonstorage->save();
        $json_storages = $jsonstorage;
        $json_storages_page = DB::table('json_storages')->paginate(3);
        
        return view('pages.root',compact("json_storages","json_storages_page"));
    }
}