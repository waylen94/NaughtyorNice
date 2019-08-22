<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JsonStorage extends Model
{
    protected $fillable = [
        'name', 'file_name', 'file_content'
    ];
}
