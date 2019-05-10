<?php


namespace App\Handlers;

use GuzzleHttp\Client;

class ImageUploadHandler
{
    protected $allowed_ext = ["json"];
    
    public function save($file, $folder, $file_prefix)
    {

        $folder_name = "uploads/Json/$folder/" ;
        
        $upload_path = public_path() . '/' . $folder_name;

        $extension = strtolower($file->getClientOriginalExtension()) ?: 'json';
        
        $filename = $file_prefix . '.' . $extension;
        
        if ( ! in_array($extension, $this->allowed_ext)) {
            return false;
        }
        

        $file->move($upload_path, $filename);
        
        return [
            'path' => config('app.url') . "/$folder_name/$filename"
        ];
    }
}