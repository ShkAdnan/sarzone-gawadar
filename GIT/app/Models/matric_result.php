<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matric_result extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'matric_board',
        'matric_rollNo',
        'matric_passingYear',
        'matric_totalMarks',
        'matric_obtainedMarks',
        'matric_percentage',
        'matric_english',
        'matric_physics',
        'matric_chemistry',
        'matric_math',
        'matric_scienceSubObtainedMarks',
        'matric_scienceSubTotalMarks',
        'matric_certificate',
        'student_id'
    ];
}
