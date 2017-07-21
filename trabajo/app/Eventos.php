<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table='eventos';
    protected $primaryKey ='ideventos';

    public $timestamps = false;

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
