<?php

namespace Joparpet;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'cpf','rg','grupo_pet','ies','modalidade_alojamento',
        'interesse_camiseta','interesse_festa'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function restricoes_alimentares()
    {
        return $this->hasMany('Joparpet\RestricaoAlimentar');
    }

    public function grupo_pet()
    {
        return $this->hasOne('Joparpet\GrupoPet');
    }
}
