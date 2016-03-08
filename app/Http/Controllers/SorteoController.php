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
    		
        $sorteos = DB::table('sorteos')   
                    ->join('participante_sorteos', 'sorteos.id', '=', 'participante_sorteos.sorteo_id')                 
                    ->select('sorteos.*', 'count(participante_sorteos.sorteo_id) as opciones', 'count(distinct participante_sorteos.user_id) as participantes')
                    ->where('sorteos.estado_sorteo', 'like', 'Aprobado') 
                    ->where('participante_sorteos.sorteo_id', '=', 'sorteos.id')   
                    ->orwhere('sorteos.nombre_sorteo', 'like', '%'.$nombre.'%')  
                    ->orwhere('sorteos.descripcion', 'like', '%'.$nombre.'%')
                    ->orderBy('sorteos.created_at','desc')   
                    ->get();

        
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
                'motivo' => 'Canje de ticket',
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
