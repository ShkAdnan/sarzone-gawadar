<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class albums_subImage extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['albums_subImages_name','album_id'];
}
