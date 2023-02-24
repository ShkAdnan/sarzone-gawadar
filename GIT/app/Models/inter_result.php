<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inter_result extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'inter_board',
        'inter_rollNo',
        'inter_passingYear',
        'inter_totalMarks',
        'inter_obtainedMarks',
        'inter_percentage',
        'inter_english',
        'inter_physics',
        'inter_chemistry',
        'inter_math',
        'inter_scienceSubObtainedMarks',
        'inter_scienceSubTotalMarks',
        'inter_certificate',
        'student_id'
    ];
}
