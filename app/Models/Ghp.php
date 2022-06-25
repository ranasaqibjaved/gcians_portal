<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ghp extends Model
{
    use HasFactory;
    protected $table = 'ghps';
    protected $fillable = [
        'name',
        'fname',
        'age',
        'gender',
        'cnic',
        'mobile',
        'email',
        'blood_group',
        'temperature',
        'address',
        'height',
        'blood_pressure',
        'pulse_rate',
        'abnormality',
        'overall_health',
        'psychiatric_history',
        'decline_academic',
        'manifestation',
        'habit',
        'activities',
        'bullying',
     ]; 

}
