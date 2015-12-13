<?php
namespace Milahorros\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Milahorros\Empresa;
use Milahorros\Http\Requests;
use Milahorros\Http\Controllers\Controller;
class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::All();
        return view('empresas.index', compact('empresas'));
    }
    public function create()
    {
        return view('empresas.create');
    }
    public function store(Request $request)
    {
        Empresa::create([
            'RUT_EMPRESA' => $request['RUT_EMPRESA'],
            'EMAIL_EMPRESA' => $request['EMAIL_EMPRESA'],
            'LOGIN_EMPRESA' => $request['LOGIN_EMPRESA'],
            'NOMBRE_EMPRESA' => $request['NOMBRE_EMPRESA'],
            'DIRECCION_EMPRESA' => 'NN',
            'CIUDAD_EMPRESA' => 'NN',
            'REGION_EMPRESA' => 'NN',
            'PAIS_EMPRESA' => 'NN',
            'FONO_EMPRESA' => 'NN',
            'FONO_2_EMPRESA' => 'NN', 
            'FECHA_CREACION_EMPRESA' => 'NN',
            'NOMBRE_ENCARGADO_EMPRESA' => 'NN',
            'PASSWORD_EMPRESA' => bcrypt($request['PASSWORD_EMPRESA'])
            ]);
            return redirect('/empresas')->with('message','store');
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('empresas.edit', compact('empresa')); 
    }
    public function update(Request $request, $id)
    {
        $empresa = Empresa::find($id);
        $empresa->fill($request->all());
        $empresa->save();
        Session::flash('message', 'Empresa editada correctamente');
        return Redirect::to('/empresas');
    }
    public function destroy($id)
    {
        Empresa::destroy($id);
        Session::flash('message', 'Empresa eliminada correctamente');
        return Redirect::to('/empresas');
    }
}
