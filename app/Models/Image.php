<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['image_name', 'social_media_link', 'image_section', 'alignment', 'file_path', 'details', 'created_at', 'updated_at'];

}
