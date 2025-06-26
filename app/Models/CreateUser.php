<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CreateUser extends Model
{
    use HasFactory;

        protected $fillable = [
        'image',
        'name',
        'fullname',
        'age',
        'email',
        'password',
        'gender',
        'role'
    ];
    protected $hidden = [
        'password'
    ];
}