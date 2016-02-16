<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Controllers\Controller;
use Session;
use Redirect;
use Auth;
use yavu\Estado;
use yavu\InteraccionEstado;
use yavu\EstadoEmpresa;
use DB;

class InteraccionEstadoController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        if($request->ajax()){
            InteraccionEstado::create($request->all());
            //Session::flash('message', 'Publicacion creada correctamente');
            return response()->json([
                "Mensaje: " => "Creado"                
            ]);
            //CargarEstados();
        }           
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
