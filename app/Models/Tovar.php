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
// начал 14:23-14:44 15:56 CRUD
// выполнение функции с заказами 16:28-16:50 17:20 заказ сделал
// реализация просмотра заказов 17:21-17:50  18:45 сделал изменение статуса на выполнен
// 18:45- 19:55