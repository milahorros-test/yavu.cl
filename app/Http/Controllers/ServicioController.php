<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Requests\EmpresaCreateRequest;
use yavu\Http\Requests\EmpresaUpdateRequest;
use yavu\Http\Controllers\Controller;
use Session;
use Redirect;
use yavu\Empresa;
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
  public function store(EmpresaCreateRequest $request)
  {
      Empresa::create($request->all());
      Session::flash('message', 'Empresa creada correctamente');
      return Redirect::to('/empresas');
  }
  public function show($id)
  {

  }
  public function edit($id)
  {
      return view('empresas.edit', ['empresa' => $this->empresa]); 
  }
  public function update(EmpresaUpdateRequest $request, $id)
  {
      $this->empresa->fill($request->all());
      $this->empresa->save();
      Session::flash('message', 'Empresa editada correctamente');
      return Redirect::to('/empresas');
  }
  public function destroy($id)
  {
      $this->empresa->delete();
      Session::flash('message', 'Empresa eliminada correctamente');
      return Redirect::to('/empresas');
  }
}
