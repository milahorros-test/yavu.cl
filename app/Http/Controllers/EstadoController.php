<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use Session;
use Redirect;
use Auth;
use yavu\Estado;
use yavu\InteraccionEstado;
use yavu\EstadoEmpresa;
use yavu\Http\Controllers\Controller;
use DB;
class EstadoController extends Controller
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
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        if($request->ajax()){
            Estado::create($request->all());
            //Session::flash('message', 'Publicacion creada correctamente');
            return response()->json([
                "Mensaje: " => "Creado"                
            ]);
            //CargarEstados();
        }
        /*
        Estado::create($request->all());
        Session::flash('message', 'Publicacion creada correctamente');
        return Redirect::to('/profile');  
        */          
    }

    public function CargarEstados($idUltima){
        //$estados = Estado::All();
        //$estados = DB::select('select * from estados where user_id = :id', ['id' => 1]);
        if((int) $idUltima == "0"){
            $estados = DB::table('estados')                    
                        ->join('users', 'users.id', '=', 'estados.user_id')
                        ->select('users.*', 'estados.*')    
                        ->where('estados.user_id', '=', Auth::user()->get()->id)   
                        ->where('estados.id', '>', (int) $idUltima)
                        ->orderBy('estados.created_at','desc')   
                        ->limit('5')
                        ->get();  
        }elseif((int) $idUltima <> "0"){
            $estados = DB::table('estados')                    
                        ->join('users', 'users.id', '=', 'estados.user_id')
                        ->select('users.*', 'estados.*')    
                        ->where('estados.user_id', '=', Auth::user()->get()->id)   
                        ->where('estados.id', '<', (int) $idUltima)
                        ->orderBy('estados.created_at','desc')   
                        ->limit('5')
                        ->get();
        }
        

        //dd($estados);
        return response()->json(
            $estados
        );
        /*
            return response()->json(
                $estados->toArray()
            );        
        */
    }



    public function ContarEstados(){
        //$estados = Estado::All();
        //$estados = DB::select('select * from estados where user_id = :id', ['id' => 1]);
        $estados = DB::table('estados')                    
                    ->join('users', 'users.id', '=', 'estados.user_id')
                    ->select('users.*', 'estados.*')    
                    ->where('estados.user_id', '=', Auth::user()->get()->id)   
                    ->orderBy('estados.created_at','desc')   
                    //->limit('5')
                    ->get();        

        //dd($estados);
        return response()->json(
            $estados
        );
        /*
            return response()->json(
                $estados->toArray()
            );        
        */
    }    

    public function show($id)
    {     
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
}
