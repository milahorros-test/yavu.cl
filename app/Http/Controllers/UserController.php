<?php
namespace Milahorros\Http\Controllers;
use Illuminate\Http\Request;
use Milahorros\Http\Requests;
use Milahorros\Http\Controllers\Controller;
use Session;
use Redirect;
use Milahorros\User;
class UserController extends Controller
{
   public function index()
   {
      $users = User::All();
      return view('usuarios.index', compact('users'));
   }
   public function create()
   {
      return view('usuarios.create');
   }
   public function store(Request $request)
   {
      User::create([
         'RUT_USUARIO' => $request['RUT_USUARIO'],
         'EMAIL_USUARIO' => $request['EMAIL_USUARIO'],
         'LOGIN_USUARIO' => $request['LOGIN_USUARIO'],
         'NOMBRE_USUARIO' => $request['NOMBRE_USUARIO'],
         'APELLIDO_USUARIO' => $request['APELLIDO_USUARIO'],
         'DIRECCION_USUARIO' => 'NN',
         'CIUDAD_USUARIO' => 'NN',
         'REGION_USUARIO' => 'NN',
         'PAIS_USUARIO' => 'NN',
         'FONO_USUARIO' => 'NN',
         'FONO_2_USUARIO' => 'NN',
         'SEXO_USUARIO' => 'NN',
         'FECHA_NACIMIENTO_USUARIO' => 'NN',
         'PASSWORD_USUARIO' => $request['PASSWORD_USUARIO']
         ]);
         Session::flash('message', 'Usuario editado correctamente');
         return Redirect::to('/usuarios');
   }
   public function show($id)
   {

   }
   public function edit($id)
   {
      $user = User::find($id);
      return view('usuarios.edit', compact('user')); 
   }
   public function update($id, Request $request)
   {
     $user = User::find($id);
     $user->fill($request->all());
     $user->save();
     Session::flash('message', 'Usuario editado correctamente');
     return Redirect::to('/usuarios');
   }
   public function destroy($id)
   {

   }
}
