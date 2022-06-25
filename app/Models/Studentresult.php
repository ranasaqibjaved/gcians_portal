<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentresult extends Model
{
    use HasFactory;
    protected $table = 'studentresults';
    protected $fillable = [
        'semester',
        'course_code',
        'teacher_name',
        'email',
        'Sem_work',
        'Mid_term',
        'Theory',
        'Practical',
        'Total',
        'Maximum',
        'Grade',
        'Q_P',
        'Marks_P',
        'Attendence_P',
        'Remarks',
        'CGPA',
        'GPA',
    ];
}
