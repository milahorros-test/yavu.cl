<?php

namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Requests\SorteoCreateRequest;
use yavu\Http\Requests\SorteoUpdateRequest;
use yavu\Http\Controllers\Controller;
use yavu\Sorteo;
use yavu\User;
use Session;
use Redirect;
use DB;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class SorteoController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }
    public function find(Route $route){
        $this->sorteo = Sorteo::find($route->getParameter('sorteos'));
        //return $this->user;
    }        
    public function index()
    {   
        
        $sorteos = DB::table('sorteos')->paginate(10);
        return view('sorteos.index', compact('sorteos'));

    }

    public function BuscarSorteos($nombre){
    	//$nombre = str_replace('+', ' ', $nombre);
    	$nombre = addslashes($nombre);
    	//$nombre = addcslashes($nombre, 'A..z');
    	$nombreCompleto="";
    	$nombre = explode('+', $nombre);
    	//dd($nombreCompleto);
    	$sqlAdd = "SELECT * FROM (SELECT id, estado_sorteo,imagen_sorteo, nombre_sorteo, descripcion FROM sorteos)newTable";
    	foreach ($nombre as $key => $value) {
    		$nombreCompleto .= $value.' ';
    		if ($key === 0)
    		{
    			$sqlAdd .= " WHERE newTable.nombre_sorteo like '%".$value."%' OR newTable.descripcion like '%".$value."%' OR newTable.estado_sorteo like '%".$value."%'";
    		}
    		else
    		{
    			$sqlAdd .= " OR newTable.nombre_sorteo like '%".$value."%' OR newTable.descripcion like '%".$value."%' OR newTable.estado_sorteo like '%".$value."%'";
    		}
    	}
    	$sqlAdd .= " OR newTable.nombre_sorteo like '%".$nombreCompleto."%' OR newTable.descripcion like '%".$nombreCompleto."%' OR newTable.estado_sorteo like '%".$nombreCompleto."%'";

    	$sqlAdd .= "ORDER BY newTable.nombre_sorteo DESC";

    	$sorteos = DB::select($sqlAdd);
      

      

/*
                    consulta = "SELECT * FROM (select l.EMPL 'Bloque',s.slotid 'Máquina',s.PlayerID 'ID', p.prenom + ' ' + p.nom  'Cliente', p.pi 'Rut' ,s.SessionStart 'Inicio Sesión',Datediff(s,s.SessionStart, s.LastChg) / 60 'Minutos en Sesión',(Datediff(s,s.SessionStart, s.LastChg) / 60)/60 'Hrs' from online..rt_sessions s (nolock), jeux..physio p (nolock), mas..slot l (nolock) where p.NOCLI = s.PlayerID and  l.NOMAC = s.SlotID)newTable WHERE  newTable.Cliente like '%" & Me.txfBuscador.Text & "%'"

SELECT * FROM (SELECT id, estado_sorteo,imagen_sorteo, nombre_sorteo, descripcion FROM sorteos)newTable 
WHERE newTable.nombre_sorteo like '%yavu%' 
OR newTable.nombre_sorteo like '%pipol%'
OR newTable.nombre_sorteo like '%sorteo%'
*/

    	
    	/*
						$sorteos = DB::table('sorteos')   
                    ->where('estado_sorteo', 'like', 'Aprobado') 
                    ->orwhere('nombre_sorteo', 'like', '%'.$value.'%')  
                    ->orwhere('descripcion', 'like', '%'.$value.'%')
                    ->union($sorteos)
                    ->orderBy('created_at','desc')   
                    ->get();    
    	*/

    	/*
    	$nombre = str_replace('+', '', $nombre);
    	$nombre = str_split($nombre, 1);

    	$in = "";

    	foreach ($nombre as $key => $value) {
    		$in .= "'".$value."',";
    	}
    	$in = substr($in, 0, -1);


    	echo $in;
    	dd($nombre);
    	
        $sorteos = DB::table('sorteos')   
                    ->whereRaw('MATCH(nombre_sorteo,descripcion) AGAINST("'.$nombre.'"")') 
                    ->orderBy('created_at','desc')   
                    ->get();    	
      */
/*    		
        $sorteos = DB::table('sorteos')   
                    ->where('estado_sorteo', 'like', 'Aprobado') 
                    ->orwhere('nombre_sorteo', 'like', '%'.$nombre.'%')  
                    ->orwhere('descripcion', 'like', '%'.$nombre.'%')
                    ->orderBy('created_at','desc')   
                    ->get();
*/
        
        return response()->json(
            $sorteos
        );
    } 
    public function CanjearTicket($user_id)
    {
        $coinsUsuario = DB::table('registro_coins')
                ->where('user_id', $user_id)
                ->sum('cantidad');     

        if($coinsUsuario >= 1000){            
            DB::table('registro_coins')->insert(
                ['user_id' => $user_id, 
                'motivo' => 'Canje (compra) de ticket',
                'cantidad' => '-1000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()                  
                ]
            );      

            DB::table('tickets')->insert(
                ['user_id' => $user_id, 
                'cantidad_tickets' => 1, 
                'monto' => 1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                ]
            );    

        }else{
            return response()->json([
                "Mensaje: " => "Sin salido para el servicio"                
            ]);             
        }
        return response()->json([
            "Mensaje: " => "Creado"                
        ]);   
    }
    public function create()
    {
        return view('sorteos.create');
    }


    public function store(Request $request)
    {
        Sorteo::create($request->all());
        Session::flash('message', 'Sorteo creado correctamente');
    return Redirect::to('/sorteos/create');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)

    {   
                
                return view('sorteos.edit', ['sorteo' => $this->sorteo]); 
    }
    public function update($id, SorteoUpdateRequest $request)
    {

        $this->sorteo->fill($request->all());
        $this->sorteo->save();
        Session::flash('message', 'sorteo validado correctamente');
        return Redirect::to('/sorteos');
    }
    public function UsarTicket($user_id, $sorteo_id)
    {
        $ticketsUsuario = DB::table('tickets')
                ->where('user_id', $user_id)
                ->sum('cantidad_tickets'); 

        if ($ticketsUsuario > 0)
        {
            DB::table('tickets')->insert(
                ['user_id' => $user_id, 
                'cantidad_tickets' => -1, 
                'monto' => -1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                ]
            );
            //Ahora rindo el ticket
            DB::table('participante_sorteos')->insert(
                ['user_id' => $user_id, 
                'sorteo_id' => $sorteo_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                ]
            );            

            return 'exito';

        }else{
            return 'sin saldo de tickets';
        }
        return 'hola '.$user_id;
    }
    public function destroy($id)
    {
        $this->sorteo->delete();
        Session::flash('message', 'Sorteo eliminado correctamente');
        return Redirect::to('/sorteos');
    }
}
