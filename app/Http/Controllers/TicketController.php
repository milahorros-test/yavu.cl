<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Controllers\Controller;
use yavu\Http\Requests\TicketCreateRequest;
use yavu\Ticket;
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
