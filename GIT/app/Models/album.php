<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['album_title','album_coverImage'];
}
