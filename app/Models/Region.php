<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $with = ['pays'];

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }
}
