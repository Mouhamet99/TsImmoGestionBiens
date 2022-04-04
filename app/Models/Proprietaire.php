<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cni' => 'integer'
    ];
    protected $guarded = ['id'];
    protected $with = ['proprietes'];

    public function proprietes(){
        return $this->hasMany(Propriete::class);
    }
    public function contrats(){
        return $this->hasMany(Contrat::class,);
    }

}
