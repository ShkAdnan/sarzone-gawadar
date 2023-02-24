<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_personal_info extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'student_firstName',
        'student_lastName',
        'student_contact',
        'student_whatsappContact',
        'student_email',
        'student_CNIC',
        'student_domicileCity',
        'student_DOB',
        'student_image',
        'city',
        'program_id',
        'student_state',
        'student_zip',
        'student_gender',
        'student_permanentAddress',
        'student_mailingAddress',
        'matric_id',
        'inter_id',
        'guardian_id',
        'student_picknDrop',
        'student_hostel',
        'student_domicileImg',
        'CV'
    ];
}
