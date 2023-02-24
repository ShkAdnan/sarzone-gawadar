<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class placement extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['job_title','job_requirements','job_endDate'];

}
