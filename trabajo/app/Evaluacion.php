<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table='evaluacion';
    protected $primaryKey ='id';

    public $timestamps = false;

    protected $fillable =[
    	'pUno',
    	'pDos',
    	'pTres',
    	'pCuatro',
    	'pCinco',
    	'pSeis',
    	'pSiete',
    	'pOcho',
    	'pNueve',
    	'pDiez',
    	'pOnce',
    	'pDoce',
    	'pTrece',
    	'pCatorce',
    	'estado',
    	'calificacion',
        'fk_idpersona',
    	'fecha',
    ];

    protected $guarded =[

    ];
}
