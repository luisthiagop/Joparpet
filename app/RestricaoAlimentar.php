<?php

namespace Joparpet;

use Illuminate\Database\Eloquent\Model;

class RestricaoAlimentar extends Model
{
    protected $table = 'restricoes_alimentares';

    protected $fillable = [
        'restricao'
    ];

}
