<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use Session;
use Redirect;
use yavu\Estado;
use yavu\Http\Controllers\Controller;
use DB;
class EstadoController extends Controller
{
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
            CargarEstados();
        }
        /*
        Estado::create($request->all());
        Session::flash('message', 'Publicacion creada correctamente');
        return Redirect::to('/profile');  
        */          
    }

    function humanTiming ($time)
    {
        $time = time() - $time; // to get the time since that moment
        $time = ($time<1)? 1 : $time;
        $tokens = array (
            31536000 => 'año',
            2592000 => 'mese',
            604800 => 'semana',
            86400 => 'día',
            3600 => 'hora',
            60 => 'minuto',
            1 => 'segundo'
        );
        foreach ($tokens as $unit => $text) {
            if ($time < $unit) continue;
            $numberOfUnits = floor($time / $unit);
            return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
        }
    }

    public function CargarEstados(){
        //$estados = Estado::All();
        //$estados = DB::select('select * from estados where user_id = :id', ['id' => 1]);
        $estados = DB::table('estados')                    
                    ->join('users', 'users.id', '=', 'estados.user_id')
                    ->select('users.*', 'estados.*')                    
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
