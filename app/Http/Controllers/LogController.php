<?php
namespace Milahorros\Http\Controllers;
use Auth;
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
        $credentials = [
            'EMAIL_USUARIO'     => Input::get('email'),
            'PASSWORD_USUARIO'  => Input::get('password')  
        ];
        if(Auth::attempt($credentials)){            
        //if(Auth::attempt(['EMAIL_USUARIO' => $request['email'], 'PASSWORD_USUARIO' => $request['password'] ])){
            return Redirect::to('/usuarios');
        }

        //Sino enviamos mensaje a nuestro usuario
        //Session::flash('message-error', 'Datos son incorrectos');
        //return Redirect::to('/login');
        return $request['email'].' / '.$request['password'];
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
