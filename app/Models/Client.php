<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';

    protected $guarded = [];

    public function fitness_tracker()
    {
      return $this->hasMany(FitnessTracker::class,'client_id');
    }

    public function diet()
    {
      return $this->hasMany(Diets::class,'client_id');
    }
}
