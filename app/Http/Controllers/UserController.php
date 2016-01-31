<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Requests\UserCreateRequest;
use yavu\Http\Requests\UserUpdateRequest;
use yavu\Http\Controllers\Controller;
use Session;
use Redirect;
use yavu\User;
use Illuminate\Routing\Route;
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
  public function panel()
  {
    $users = User::All();
    return view('usuarios.panel', compact('users'));    
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
