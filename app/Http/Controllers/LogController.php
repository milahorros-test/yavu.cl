<?php
namespace Milahorros\Http\Controllers;
use Auth;
use Hash;
use Milahorros\User;
use Input;
use Session;
Use Redirect;
use Milahorros\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Milahorros\Http\Requests;
use Milahorros\Http\Controllers\Controller;
class LogController extends Controller
{
    public function index()
    {

    }
    public function create()
    {

    }
    public function store(LoginRequest $request)
    {
        $userEmail = User::where('email', Input::get('email'))->first();
        $userPassword = User::where('password', Input::get('password'));
        if(!$userEmail){
            Session::flash('message-error', 'El email ingresado no se encuentra registrado.');    
            return Redirect::back();//->withInput()->withFlashMessage('Unknown username.');    
        }else if(!$userPassword){
                Session::flash('message-error', 'El clave incorrecta.');    
                return Redirect::back();//->withInput()->withFlashMessage('Unknown username.'); 
        }

        if(Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])){
            return Redirect::to('/usuarios');
        }
        //Sino enviamos mensaje a nuestro usuario
        Session::flash('message-error', 'Datos son incorrectos');
        return Redirect::to('/login');
    }
    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
    public function show($id)
    {

    }
    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {

    }
}
