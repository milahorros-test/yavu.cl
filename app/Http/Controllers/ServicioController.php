<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Requests\ServicioCreateRequest;
use yavu\Http\Requests\ServicioUpdateRequest;
use yavu\Http\Controllers\Controller;
use Session;
use Redirect;
use yavu\Servicio;
use Illuminate\Routing\Route;
class ServicioController extends Controller
{
  public function __construct(){
    $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
  }
  public function find(Route $route){
    $this->servicio = Servicio::find($route->getParameter('servicios'));
    //return $this->empresa;
  }    
  public function index()
  {
      $servicios = Servicio::paginate(5);
      return view('servicio.index', compact('servicios'));
  }
  public function create()
  {
      return view('servicios.create');
  }
  public function store(ServicioCreateRequest $request)
  {
      Servicio::create($request->all());
      Session::flash('message', 'Servicio creado correctamente');
      return Redirect::to('/admins');
  }
  public function show($id)
  {

  }
  public function edit($id)
  {
      return view('servicios.edit', ['servicio' => $this->empresa]); 
  }
  public function update(ServicioUpdateRequest $request, $id)
  {
      $this->servicio->fill($request->all());
      $this->servicio->save();
      Session::flash('message', 'Servicio editado correctamente');
      return Redirect::to('/admins');
  }
  public function destroy($id)
  {
      $this->servicio->delete();
      Session::flash('message', 'Servicio eliminado correctamente');
      return Redirect::to('/admins');
  }
}
