<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guardian_info extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'guardian_name',
        'guardian_CNIC',
        'guardian_contact',
        'guardian_whatsappContact',
        'guardian_relation',
        'guardian_profession',
        'guardian_monthlyIncome',
        'student_id'
    ];
}
