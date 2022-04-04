<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;

    protected $with = ['commune'];

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}
