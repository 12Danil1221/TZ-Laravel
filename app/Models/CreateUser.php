<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CreateUser extends Model
{
    use HasFactory;

        protected $fillable = [
        'email',
        'password',
        'gender',
    ];
}