<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Normatividad extends Model
{
    protected $table='normatividad';
    protected $primaryKey='id_normatividad';

     public $timestamps = false;

    protected $fillable =[
    	'nombre_pdf',
    	'url_pdf',
        'fk_idempleados',
    	'fk_id_tip_normat',
    ];

    protected $guarded =[

    ];
}
