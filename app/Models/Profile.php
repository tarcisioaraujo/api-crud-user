<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
    ];

    public function registerUser()
    {
        return $this->hasOne(RegisterUser::class);
    }
}
