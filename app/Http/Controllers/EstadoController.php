<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use Session;
use Redirect;
use yavu\Estado;
use yavu\Http\Controllers\Controller;
class EstadoController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        Estado::create($request->all());
        Session::flash('message', 'Publicacion creada correctamente');
        return Redirect::to('/profile');            
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
