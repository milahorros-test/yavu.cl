<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Requests\UserCreateRequest;
use yavu\Http\Requests\UserUpdateRequest;
use yavu\Http\Controllers\Controller;
use Session;
use Auth;
use Redirect;
use yavu\User;
use yavu\Estado;
use Illuminate\Routing\Route;
use DB;
class UserController extends Controller
{
  public function __construct(){
    $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
  }
  public function find(Route $route){
    $this->user = User::find($route->getParameter('usuarios'));
    //return $this->user;
  }
  public function index()
  {
    $users = User::paginate(5);
    //$users = User::onlyTrashed()->paginate(5);
    return view('usuarios.index', compact('users'));
  }
  public function BuscarUsuarios($nombre){
    $usuarios = DB::table('users')                    
                ->select('*')    
                ->where('nombre', 'like', '%'.$nombre.'%')   
                ->orderBy('created_at','desc')   
                ->get();

    //dd($usuarios);
    return response()->json(
        $usuarios
    );
  }
  public function create()
  {
    return view('usuarios.create');
  }
  public function store(UserCreateRequest $request)
  {
    User::create($request->all());
    Session::flash('message', 'Usuario creado correctamente');
    return Redirect::to('/usuarios');
  }
  public function show($id)
  {

  }

  public function InfoEmpresas($user_id)
  {
    $info = DB::table('empresas')                    
                ->select('*')    
                ->where('user_id', '=', $user_id)   
                ->orderBy('created_at','desc')   
                ->get();

    return response()->json(
      $info    
    );
  }

  public function dashboard()
  {
    $users = DB::table('users')                    
                ->select('*')    
                ->where('id', '=', Auth::user()->get()->id)   
                ->get();

    return view('usuarios.dashboard', compact('users'));    
  }  
  public function profile()
  {


    return view('usuarios.profile'); 
  }    
  public function edit($id)
  {
    return view('usuarios.edit', ['user' => $this->user]); 
  }
  public function update($id, UserUpdateRequest $request)
  {
    $this->user->fill($request->all());
    $this->user->save();
    Session::flash('message', 'Usuario editado correctamente');
    return Redirect::to('/usuarios');
  }
  public function destroy($id)
  {
    $this->user->delete();
    Session::flash('message', 'Usuario eliminado correctamente');
    return Redirect::to('/usuarios');
  }

}
