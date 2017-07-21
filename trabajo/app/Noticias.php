<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $table='noticias';
    protected $primaryKey='idnoticias';

     public $timestamps = false;

    protected $fillable =[
    	'fecha',
    	'titulo',
    	'noticia',
        'fk_idempleados',
    	'estadonoticia',
    ];

    protected $guarded =[

    ];
}
