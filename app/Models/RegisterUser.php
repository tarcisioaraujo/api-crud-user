<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'email',
        'cpf',
    ];
}
