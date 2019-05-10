<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handlers\JsonRetrieveHandler;

class AnalysisController extends Controller
{
    public function show(JsonRetrieveHandler $Retrieve)
    {
        $Retrieve->save("hotel1_testing1");
        return view('pages.analysis');
        
        
        
    }
}
