<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Controllers\Controller;
use yavu\Http\Requests\TicketCreateRequest;
use yavu\Ticket;
use yavu\User;
use Session;
use Auth;
use Redirect;
use Illuminate\Routing\Route;
use DB;
class TicketController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }
    public function find(Route $route){
        $this->ticket = Ticket::find($route->getParameter('tickets'));
    }    
    public function index()
    {
        $tickets = Ticket::paginate(5);
        return view('tickets.index', compact('tickets'));
    }
    public function create()
    {
        return view('tickets.create');
    }

    public function EfectuarCompra($user_id, $cantidadtickets)
    {
        $coinsUsuario = DB::table('registro_coins')
                ->where('user_id', $user_id)
                ->sum('cantidad');    

        $valorCompra = (int) $cantidadtickets*1000;

        if($coinsUsuario >= $valorCompra ){            
            DB::table('registro_coins')->insert(
                ['user_id' => $user_id, 
                'motivo' => 'Compra de ticket'.(($cantidadtickets>1)?'s':''),
                'cantidad' => $valorCompra*-1
                ]
            );   
            DB::table('tickets')->insert(
                ['user_id' => $user_id, 'cantidad_tickets' => $cantidadtickets, 'monto' => ((int) $cantidadtickets * 1000)]
            );                 
            return response()->json(
               'Exito'
            );                       

        }else{
            return response()->json(
               'Sin salido para el servicio'
            );                      
        }
    }
  
    public function store(TicketCreateRequest $request)
    {
        Ticket::create($request->all());
        Session::flash('message', 'Ticket creado correctamente');
        return Redirect::to('/tickets');
    }
    public function show($id)
    {

    }   
}
