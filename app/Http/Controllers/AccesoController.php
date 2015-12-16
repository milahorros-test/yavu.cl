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
class AccesoController extends Controller
{
    public function index()
    {

    }
    public function create()
    {

    }
    public function store(LoginRequest $request)
    {
        //Session::flash('message-error', 'Datos son incorrectos');
        //return Redirect::to('/login');
        return 'Nombre usuario: '.$request['email'].'/ Clave: '.$request['password'];
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
