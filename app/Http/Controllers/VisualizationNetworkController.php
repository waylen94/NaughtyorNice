<?php

namespace App\Http\Controllers;

use App\Handlers\JsonUploadingHandler;


use Illuminate\Http\Request;

class VisualizationNetworkController extends Controller
{
    public function upload(Request $request, JsonUploadingHandler $uploader)
    {
        if($request->network_json){
            $uploader->save($request->network_json);
        }
        return view('pages.root');
    }
}
