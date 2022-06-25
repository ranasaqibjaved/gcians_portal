<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;
    protected $table = 'timetables';
    protected $fillable = [
        'semester',
        'course_code',
        'teacher_name',
        'location',
        'monday',
        'tuesday',
        'wednesday',
        'thurday',
        'friday',
        'saturday',
        'sunday',
    ];
}
