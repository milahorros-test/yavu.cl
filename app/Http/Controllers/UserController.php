<?php
namespace Milahorros\Http\Controllers;
use Illuminate\Http\Request;
use Milahorros\Http\Requests;
use Milahorros\Http\Controllers\Controller;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \Milahorros\User::All();
        return view('usuarios.index', compact('users'));
    }
    public function create()
    {
        return view('usuarios.create');
    }
    public function store(Request $request)
    {
        \Milahorros\User::create([
            'RUT_USUARIO' => "NDS",
            'EMAIL_USUARIO' => $request['email'],
            'LOGIN_USUARIO' => 'AS',
            'NOMBRE_USUARIO' => $request['name'],
            'APELLIDO_USUARIO' => 'NN',
            'DIRECCION_USUARIO' => 'NN',
            'CIUDAD_USUARIO' => 'NN',
            'REGION_USUARIO' => 'NN',
            'PAIS_USUARIO' => 'NN',
            'FONO_USUARIO' => 'NN',
            'FONO_2_USUARIO' => 'NN',
            'SEXO_USUARIO' => 'NN',
            'FECHA_NACIMIENTO_USUARIO' => 'NN',
            'PASSWORD_USUARIO' => bcrypt($request['password'])
            ]);
            return redirect('/usuarios')->with('message','store');
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
