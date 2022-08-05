<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessTracker extends Model
{
    use HasFactory;
    protected $table = 'fitness_tracker';

    protected $guarded = [];
    public function client()
    {
      return $this->belongsTo(Clients::class);
    }
}

