<?php
namespace milahorros\Http\Controllers;
use Illuminate\Http\Request;
use milahorros\Http\Requests;
use milahorros\Http\Requests\EmpresaCreateRequest;
use milahorros\Http\Requests\EmpresaUpdateRequest;
use milahorros\Http\Controllers\Controller;
use Session;
use Redirect;
use milahorros\Empresa;
use Illuminate\Routing\Route;
class EmpresaController extends Controller
{
  public function __construct(){
    $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
  }
  public function find(Route $route){
    $this->empresa = Empresa::find($route->getParameter('empresas'));
    //return $this->empresa;
  }    
  public function index()
  {
      $empresas = Empresa::paginate(5);
      return view('empresas.index', compact('empresas'));
  }
  public function create()
  {
      return view('empresas.create');
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
