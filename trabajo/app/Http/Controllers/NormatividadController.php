<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Normatividad;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\NormatividadFormRequest;
use DB;

class NormatividadController extends Controller
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
    		$norma=DB::table('normatividad as n')
    		->join('tipo_normatividad as tn', 'n.fk_id_tip_normat','=','tn.id_tip_normat')
    		->select('n.id_normatividad','n.nombre_pdf','tn.nombre_tipo as norma','n.url_pdf')
    		->where('n.nombre_pdf','LIKE','%'.$query.'%')
    		->orderBy('n.id_normatividad','desc')
    		->paginate(5);

    		return view('admin.normatividad.index',["norma"=>$norma,"searchText"=>$query]);
    	}
    }

    public function create()
    {
    	$normas=DB::table('tipo_normatividad')->get();
    	return view("admin.normatividad.create",["normas"=>$normas]);
    }

    public function store(NormatividadFormRequest $request)
    {
    	$nor = new Normatividad;
        $nor->nombre_pdf=$request->get('nombrePDF');
        if(Input::hasFile('url'))
        {
            $file=Input::file('url');
            $file->move(public_path().'/pdf/normatividad',$file->getClientOriginalName());
            $nor->url_pdf=$file->getClientOriginalName();
        }
    	$nor->fk_idusers=$request->get('id');
        $nor->fk_id_tip_normat=$request->get('id_tipo_norma');
    	$nor->save();

    	return Redirect::to('admin/normatividad');
    }

    public function show($id)
    {
    	return view("admin.normatividad.show",["norma"=>Normatividad::findOrFail($id)]);
    }

    public function edit($id)
    {
    	$norma=Normatividad::findOrFail($id);
    	$tipo=DB::table('tipo_normatividad')->get();

    	return view("admin.normatividad.edit",["norma"=>$norma, "tipoNormas"=>$tipo]);
    }

    public function update(NormatividadFormRequest $request, $id)
    {
    	$norma = Normatividad::findOrFail($id);
        
    	$norma ->nombre_pdf=$request->get('nombrePDF');

    	if(Input::hasFile('url'))
    	{
    		$file=Input::file('url');
    		$file->move(public_path().'/pdf/normatividad',$file->getClientOriginalName());
    		$norma->url_pdf=$file->getClientOriginalName();
    	}
        
        $norma->fk_id_tip_normat=$request->get('id_tipo_norma');
    	$norma->update();

    	return Redirect::to('admin/normatividad');

    }

    public function destroy()
    {
    	
    }

    public function principal()
    {
        $norma=DB::table('normatividad as n')
        ->join('tipo_normatividad as tn', 'n.fk_id_tip_normat','=','tn.id_tip_normat')
        ->select('n.fk_id_tip_normat','n.nombre_pdf','tn.id_tip_normat as id_tipo','tn.nombre_tipo as norma','n.url_pdf')
        ->orderBy('n.id_normatividad','desc')
        ->paginate(10);

        //dd($norma);

        return view('normatividad',["nor"=>$norma]);
    }
}
