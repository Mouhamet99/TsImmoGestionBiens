<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    protected $with = ['proprietaire'];
    protected $guarded = ['id'];

    public function typeContrat()
    {
        return $this->belongsTo(TypeContrat::class);
    }
    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }
}
