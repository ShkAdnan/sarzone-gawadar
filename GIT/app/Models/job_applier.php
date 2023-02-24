<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_applier extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['applier_cv','job_id','careers_job','placements_job','status'];
}
