<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\RegistrationController;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'registrations';
    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
    ];
}
