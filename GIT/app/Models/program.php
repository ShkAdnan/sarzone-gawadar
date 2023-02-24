<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['program_name','program_preRequisite','program_duration'];

}
