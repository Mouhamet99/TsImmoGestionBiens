<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class Proprietaire extends Model
{
    use HasFactory;
    use HasRoles;


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

    public function proprietes()
    {
        return $this->hasMany(Propriete::class);
    }

    public function contrats()
    {
        return $this->hasMany(Contrat::class,);
    }

}
