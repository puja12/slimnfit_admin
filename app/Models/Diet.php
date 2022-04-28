<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;
    protected $table = 'plans';

    protected $guarded = [];
    
    public function client()
    {
      return $this->belongsTo(Clients::class);
    }
}
