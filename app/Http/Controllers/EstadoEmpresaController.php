<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use Session;
use Redirect;
use Auth;
use yavu\Estado;
use yavu\EstadoEmpresa;
use yavu\Http\Controllers\Controller;
use DB;
class EstadoEmpresaController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }
    public function find(Route $route){
        $this->user = User::find($route->getParameter('usuarios'));
        //return $this->user;   
    }        
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
            EstadoEmpresa::create($request->all());
            //Session::flash('message', 'Publicacion creada correctamente');
            return response()->json([
                "Mensaje: " => "Creado"                
            ]);
            //CargarEstadoEmpresa();
        }
        /*
        Estado::create($request->all());
        Session::flash('message', 'Publicacion creada correctamente');
        return Redirect::to('/profile');  
        */           
    }
    public function CargarEstadoEmpresa($idUltima){
        //$estados = Estado::All();
        //$estados = DB::select('select * from estados where user_id = :id', ['id' => 1]);
        if((int) $idUltima == "0"){
            $estado_empresas = DB::table('estado_empresas')                    
                        ->join('users', 'users.id', '=', 'estado_empresas.user_id')
                        ->select('users.*', 'estado_empresas.*')    
                        ->where('estado_empresas.user_id', '=', Auth::user()->get()->id)   
                        ->where('estado_empresas.id', '>', (int) $idUltima)
                        ->orderBy('estado_empresas.created_at','desc')   
                        ->limit('5')
                        ->get();  
        }elseif((int) $idUltima <> "0"){
            $estado_empresas = DB::table('estado_empresas')                    
                        ->join('users'  , 'users.id', '=', 'estado_empresas.user_id')
                        ->select('users.*', 'estado_empresas.*')    
                        ->where('estado_empresas.user_id', '=', Auth::user()->get()->id)   
                        ->where('estado_empresas.id', '<', (int) $idUltima)
                        ->orderBy('estado_empresas.created_at','desc')   
                        ->limit('5')
                        ->get();
        }
        

        //dd($estados);
        return response()->json(
            $estado_empresas
        );
        /*
            return response()->json(
                $estados->toArray()
            );        
        */
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
