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
use Auth;
use DB;

class EmpresaController extends Controller
{
  public function __construct(){
    $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
  }
  public function find(Route $route){
    $this->empresa = Empresa::find($route->getParameter('empresas'));
    //return $this->empresa.;
  }    
  public function index(Request $request)
  {
     
      $empresas = Empresa::nombre($request->get('nombre'))->orderBy('id', 'DESC')->paginate();

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
      return Redirect::to('/empresas/create');
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
  public function MostrarEmpresaPublica($empresa){
    $empresa = DB::table('empresas')
                ->join('users', 'users.id', '=', 'empresas.user_id')   
                ->select('empresas.*', 'users.id as user_id')    
                ->where('empresas.nombre', '=', $empresa)   
                ->orderBy('empresas.created_at','desc')   
                ->get();

    //dd($usuarios);

    /*return response()->json(
        $empresa
    );*/
    return view('empresas.publicProfile', compact('empresa'));
  }
  public function SolicitarEliminacion($id)
    {
      DB::table('empresas')
              ->where('id', $id)
              ->update(['estado' => 'eliminar']);            
      return Redirect::to('/profile');
    }

  public function ListaEmpresas(Request $request)
    {
      $empresas = Empresa::nombre($request->get('nombre'))->orderBy('id', 'DESC')->paginate();

    return view('listaempresas', compact('empresas'));      
    } 

  public function destroy($id)
  {
      $this->empresa->delete();
      Session::flash('message', 'Empresa eliminada correctamente');
      return Redirect::to('/empresas');
  }
  
}
