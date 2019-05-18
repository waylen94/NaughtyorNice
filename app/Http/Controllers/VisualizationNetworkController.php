<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class VisualizationNetworkController extends Controller
{
    public function upload(Request $request)
    {
        dd($request->network_json);
        return redirect()->route('pages.root');
    }
}
