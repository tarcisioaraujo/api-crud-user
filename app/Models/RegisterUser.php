<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'profile_id',
    ];

    public function profile() 
    {
        return $this->hasOne(Profile::class);
    }

    public function address() 
    {
        return $this->belongsToMany(Address::class);
    }
}
