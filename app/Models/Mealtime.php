<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mealtime extends Model
{
    use HasFactory;
    protected $table = 'mealtime';

    public function mealtime()
    {
      return $this->hasMany(Meal::class);
    }
}
