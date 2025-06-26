<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Orders extends Model
{
    use HasFactory;

    protected $fillable=['tovar_name','FIO','quantity','price', 'status', 'comment', 'total_price'];

    public function tovar():BelongsToMany
    {
        return $this->belongsToMany(Tovar::class);
    }
}