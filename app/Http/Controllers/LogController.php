<?php
namespace Milahorros\Http\Controllers;
use Auth;
use Hash;
use Milahorros\User;
use Milahorros\Empresa;
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
        if(!$userEmail){
            $empresaEmail = Empresa::where('email', Input::get('email'))->first();
            if(!$empresaEmail){
                Session::flash('message-error', 'El email ingresado no se encuentra registrado.');    
                return Redirect::back();//->withInput()->withFlashMessage('Unknown username.');     
            }else{
                if(Auth::empresa()->attempt(['email' => Input::get('email'), 'password' => Input::get('password')])){
                    return Redirect::to('/empresas');
                }
                Session::flash('message-error', 'Datos son incorrectos');
                return Redirect::to('/Login');
            }
        }else{
            if(Auth::user()->attempt(['email' => Input::get('email'), 'password' => Input::get('password')])){
                return Redirect::to('/usuarios');
            }
        }
        Session::flash('message-error', 'Datos son incorrectos');
        return Redirect::to('/login');
    }
    public function logout(){
        if(Auth::logout()){
            return Redirect::to('/');    
        }elseif(Auth::empresa()->logout()){
            return Redirect::to('/');
        }else{
            Session::flash('message-error', 'Ocurrió un error al cerrar la sesión.');
            return Redirect::to('/');
        }
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
