<?php

namespace Milahorros\Http\Controllers;

use Illuminate\Http\Request;

use Milahorros\Http\Requests;
use Milahorros\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = \Milahorros\Empresa::All();
        return view('empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Milahorros\Empresa::create([
            'RUT_EMPRESA' => "NDSs",
            'EMAIL_EMPRESA' => $request['email'],
            'LOGIN_EMPRESA' => 'AsS',
            'NOMBRE_EMPRESA' => $request['name'],
            'DIRECCION_EMPRESA' => 'NN',
            'CIUDAD_EMPRESA' => 'NN',
            'REGION_EMPRESA' => 'NN',
            'PAIS_EMPRESA' => 'NN',
            'FONO_EMPRESA' => 'NN',
            'FONO_2_EMPRESA' => 'NN', 
            'FECHA_CREACION_EMPRESA' => 'NN',
            'NOMBRE_ENCARGADO_EMPRESA' => 'NN',
            'PASSWORD_EMPRESA' => bcrypt($request['password'])
            ]);
            return redirect('/empresas')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
