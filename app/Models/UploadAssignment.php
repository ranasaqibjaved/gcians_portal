<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadAssignment extends Model
{
    use HasFactory;
    protected $table = 'upload_assignments';
    protected $fillable = [
        'filename',
        'file_path',
        'email',
        'studentName',
        'teacherName',
        'semester',
        'courseCode',
     ]; 

}
