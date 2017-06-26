<?php

namespace Joparpet;

use Illuminate\Database\Eloquent\Model;

class GrupoPet extends Model
{
    protected $table = 'grupos_pet';

    protected $fillable = [
        'nome','cidade','estado','descricao'
    ];
}
