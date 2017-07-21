<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Eventos;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EventoFormRequest;
use DB;

class EventoController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
    	if($request)
    	{
    		$query=trim($request->get('searchText'));
    		$evento=DB::table('eventos')->where('titulo','LIKE','%'.$query.'%')
    		->where('estadoevento','=','1')
    		->orderBy('ideventos','desc')
    		->paginate(5);
    		return view('admin.evento.index',["eventos"=>$evento,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	return view("admin.evento.create");
    }

    public function store(EventoFormRequest $request)
    {
    	$evento = new Eventos;
    	$evento ->fecha=$request->get('fecha');
    	$evento ->hora=$request->get('hora');
    	$evento ->titulo=$request->get('titulo');
    	$evento ->lugar=$request->get('lugar');
        $evento ->fk_idusers=$request->get('id');
    	$evento ->estadoevento='1';
    	$evento ->save();

    	return Redirect::to('evento');
    }

    public function show($id)
    {
    	return view("admin.evento.show",["evento"=>Evento::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view("admin.evento.edit",["evento"=>Eventos::findOrFail($id)]);
    }

    public function update(EventoFormRequest $request, $id)
    {
    	$evento = Eventos::findOrFail($id);
    	$evento ->fecha=$request->get('fecha');
    	$evento ->hora=$request->get('hora');
    	$evento ->titulo=$request->get('titulo');
    	$evento ->lugar=$request->get('lugar');
    	$evento ->update();

    	return Redirect::to('evento');

    }

    public function destroy($id)
    {
    	$evento = Eventos::findOrFail($id);
    	$evento ->estadoevento='0';
    	$evento ->update();
        
    	return Redirect::to('admin/evento');
    }

    public function principal()
    {
        $evento=DB::table('eventos')
        ->where('estadoevento','=','1')
        ->orderBy('ideventos','desc')->get();

        $noticia=DB::table('noticias')
        ->where('estadonoticia','=','1')
        ->orderBy('idnoticias','desc')->get();
        
        return view('index',["eventos"=>$evento,"noticias"=>$noticia]);
    }
     

}
