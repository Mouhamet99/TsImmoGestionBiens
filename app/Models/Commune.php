<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $with = ['departement'];

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
