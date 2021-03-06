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
use RUT;
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

      DB::table('pops')->insert(
          ['user_id' => $request->user_id, 
          'empresa_id' => 1,
          'tipo' => 'activacion', 
          'estado'   => 'pendiente',
          'contenido' => 'Se ha registrado tu pyme! '.$request->nombre,
          'created_at' => strftime( "%Y-%m-%d-%H-%M-%S", time()),
          'updated_at' => strftime( "%Y-%m-%d-%H-%M-%S", time())]
      );    

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
    if(RUT::check($request->rut)){
      $this->empresa->fill($request->all());
      $this->empresa->save();
      Session::flash('message', 'Empresa editada correctamente');
      return Redirect::to('/empresas');
    }else{
      Session::flash('message-error', 'El rut ingresado no es válido.');
      return Redirect::to('/dashboard');   
    }
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

  public function ValidarRutEmpresa($rut)
  {
    if(RUT::check($rut)){
      return RUT::clean($rut);
    }else{
      return "false";
    }
  }
   public function BuscarEmpresas($nombre){
    $empresas = DB::table('empresas')                    
                ->select('*')    
                ->where('nombre', 'like', '%'.$nombre.'%')  
                ->orwhere('ciudad', 'like', '%'.$nombre.'%')
                ->orwhere('region', 'like', '%'.$nombre.'%')
                ->orderBy('created_at','desc')   
                ->get();

    //dd($empresas);
    return response()->json(
        $empresas
    );
  } 
  
  

  public function searchcat()
{
    $categories = \Input::get('categories');

    $vacancies = \Vacancy::whereIn('category_id', $categories)->get();

    return \View::make('vacancies.empty')->with('vacancies', $vacancies); 
}

  public function destroy($id)
  {
      $this->empresa->delete();
      Session::flash('message', 'Empresa eliminada correctamente');
      return Redirect::to('/empresas');
  }
  
}
