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
        /*$credentials = [
            'EMAIL_USUARIO'     => Input::get('email'),
            'PASSWORD_USUARIO'  => \Hash::make(Input::get('password'))  
        ];*/


        
        /*if(Auth::attempt($credentials)){            
        //if(Auth::attempt(['EMAIL_USUARIO' => $request['email'], 'PASSWORD_USUARIO' => $request['password'] ])){
            return Redirect::to('/usuarios');
        }*/


/*
        $auth = User::where('EMAIL_USUARIO', '=', Input::get('email'))->where('PASSWORD_USUARIO', '=', \Hash::make(Input::get('password')))->first();
        if($auth){ 
            if(Input::get('rememberme')){ 
                Auth::login($auth, true); 
            } else { 
                Auth::login($auth); 
            } 
            return Redirect::intended('/'); 
        } else { 
            //View::make('login')->with('err', 'There was a problem signing in'); 
                    Session::flash('message-error', 'Datos son incorrectos');
        return Redirect::to('/login');
        } 
*/
        if(Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])){
            return Redirect::to('/usuarios');
        }
        //Sino enviamos mensaje a nuestro usuario
        Session::flash('message-error', 'Datos son incorrectos');
        return Redirect::to('/login');
        //return $request['email'].' / '.$request['password'];
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
