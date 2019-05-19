<?php

namespace App\Handlers;

class JsonUploadingHandler
{
    protected $allowed_ext = ["json"];
    
    public function save($file)
    {
       
        $folder_name = "uploads/Json" ;
//         $filename = $file_prefix . '.' . "json";
        $filename = "data_network.json";
        $upload_path = public_path() . '/' . $folder_name;
        
        $file->move($upload_path, $filename);
        
        return [
            'path' => config('app.url') . "/$folder_name/$filename"
        ];
    }
}