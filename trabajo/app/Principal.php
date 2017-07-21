<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    protected $fillable =[
    	'fecha',
    	'hora',
    	'titulo',
    	'lugar',
        'fk_idempleados',
    	'estadoevento',
    ];

    protected $guarded =[

    ];
}
