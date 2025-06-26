<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tovar extends Model
{
    use HasFactory;

    protected $fillable = ['img','name','categories','description','price'];

    public function categories():HasMany
    {
        return $this->hasMany(Categories::class);
    }
    public function orders():HasMany
    {
        return $this->hasMany(Orders::class);
    }
}