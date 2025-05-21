<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categories extends Model
{
    use HasFactory;

    protected $fillable=['categories'];

    public function tovar():BelongsToMany
    {
        return $this->belongsToMany(Tovar::class);
    }
}