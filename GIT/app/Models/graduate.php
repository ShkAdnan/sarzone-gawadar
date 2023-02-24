<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class graduate extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['graduate_name','graduate_fatherName','graduate_CNIC','program_id','graduate_contact','graduate_address','graduate_date','graduate_duration'];
}
