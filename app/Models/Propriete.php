<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;


     protected $casts = [
        'superficie' => 'integer',
        'nombre_etages' => 'integer',
    ];
    protected $guarded = ['id'];
//
    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class,"proprietaire_id");
    }
//
//    public function quartier()
//    {
//        return $this->belongsTo(Quartier::class);
//    }


}
