<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticias;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\NoticiaFormRequest;
use DB;


class NoticiaController extends Controller
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
    		$noticia=DB::table('noticias')->where('titulo','LIKE','%'.$query.'%')
    		->where('estadonoticia','=','1')
    		->orderBy('idnoticias','desc')
    		->paginate(5);

    		return view('admin.noticias.index',["noticias"=>$noticia,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	return view("admin.noticias.create");
    }

    public function store(NoticiaFormRequest $request)
    {
    	$noticia = new Noticias;
    	$noticia ->fecha=$request->get('fecha');
    	$noticia ->titulo=$request->get('titulo');
    	$noticia ->noticia=$request->get('noticia');
        $noticia ->fk_idusers=$request->get('id');
    	$noticia ->estadonoticia='1';
    	$noticia ->save();

        return Redirect::to('admin/noticias');
    }

    public function show($id)
    {
    	return view("admin.noticias.show",["noticia"=>Noticias::findOrFail($id)]);
    }

    public function edit($id)
    {
    	return view("admin.noticias.edit",["noticia"=>Noticias::findOrFail($id)]);
    }

    public function update(NoticiaFormRequest $request, $id)
    {
    	$noticias = Noticias::findOrFail($id);
    	$noticias ->fecha=$request->get('fecha');
    	$noticias ->titulo=$request->get('titulo');
    	$noticias ->noticia=$request->get('noticia');
    	$noticias ->update();

    	return Redirect::to('admin/noticias');
    }

    public function destroy($id)
    {
    	$noticias = Noticias::findOrFail($id);
    	$noticias ->estadonoticia='0';
    	$noticias ->update();
        
    	return Redirect::to('admin/noticias');
    }

}
