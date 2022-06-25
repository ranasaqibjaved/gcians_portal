<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semdata extends Model
{
    use HasFactory;
    protected $table = 'semdatas';
    protected $fillable = [
       'coursecode',
       'subjecttile',
       'teachername',     
       'semesternumber',     
    ]; 

}
