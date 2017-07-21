<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evaluacion;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EvaluacionFormRequest;
use DB;


class EvaluacionController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function noindex(Request $request){
        $mail = $request->email;
        if ($mail) {
            $query=trim($mail);
    		$persona=DB::table('persona')->where('email','=',$query)
    		->where('estado','=','1')
    		->get();
    		if(isset($persona[0])){
    		    $evaluacions =DB::table('evaluacion')->where('fk_idpersona','=',$persona[0]->idempleados)
    		    ->get();
    		    //dd($evaluacions[0]);
    		    if(!(isset($evaluacions[0]))){
    		        return view('evaluacion',['fk_idpersona'=>$persona[0]->idempleados]);    
    		    }
    		    else{
    		        $mensaje = 'Usted ya presento la prueba, su calificacion es: '.$evaluacions[0]->calificacion;
    		        flash($mensaje)->success();
                    return Redirect::to('reinduccion');    
    		    }
    		    
    		}
    		//validar s no se ha reaizado
    		else{
    		    flash('Usted no esta registrado!!')->error()->important();
    		    return Redirect::to('reinduccion');
    		}
        }else{
            flash('Ingrese su email!!')->error()->important();
            return Redirect::to('reinduccion');
        }
    }
    
    public function index($mail){
        if ($mail) {
            $query=trim($mail);
    		$persona=DB::table('persona')->where('email','=',$query)
    		->where('estado','=','1')
    		->get();
    		if(isset($persona[0])){
    		    return view('evaluacion',['fk_idpersona'=>$persona[0]->idempleados]);
    		}
    		else{
    		    flash('Usted no esta registrado!!')->error()->important();
    		    return Redirect::to('reinduccion');
    		}
        }else{
            //ingrese mail
            return Redirect::to('reinduccion');
        }
    }
    
    public function evaluar (Request $request){
        
        $entrada = $request->all();
        $entrada['estado'] = 1;
        $entrada['calificacion'] = '--';
        $hoy = getdate();
        $entrada['fecha'] = $hoy['year'].'-'.$hoy['mon'].'-'.$hoy['mday'];
        $evaluacion = Evaluacion::create($entrada);
        
        flash('Su evaluacion se envio correctamente!!')->success();
        return Redirect::to('reinduccion');    
        
    }
    
    public function mostrarSC(Request $request){
        $ev = DB::table('evaluacion as e')
        ->join('persona as p','e.fk_idpersona','=','p.idempleados')
        ->select('p.idempleados','p.cedula','p.nombres','p.email','e.fk_idpersona','e.id','e.pUno','e.pDos','e.pTres','e.pCuatro','e.pCinco','e.pSeis','e.pSiete','e.pOcho','e.pNueve','e.pDiez','e.pOnce','e.pDoce','e.pTrece','e.pCatorce')
        ->where('e.calificacion','LIKE','--')
        ->orderBy('p.idempleados','desc')
        ->paginate(5);
        
        $ev2 = DB::table('evaluacion as e')
        ->join('persona as p','e.fk_idpersona','=','p.idempleados')
        ->select('p.idempleados','p.cedula','p.nombres','p.email','e.calificacion')
        ->where('e.calificacion','<>','--')
        ->orderBy('p.idempleados','desc')
        ->paginate(5);
        
        return view('admin.evaluacion.index',["evaluacion"=>$ev,"evaluacion2"=>$ev2]);
    }
    public function update($idevaluacion, Request $request){
        $evaluacion = Evaluacion::find($idevaluacion);
        $evaluacion->calificacion = $request->all()['calificacion'];
        $evaluacion->save();
        return Redirect::to('admin/evaluacion');        
    }
}
