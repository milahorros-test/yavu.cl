<?php
namespace milahorros\Http\Controllers;
use Illuminate\Http\Request;
use milahorros\Http\Requests;
use milahorros\Http\Requests\AdminCreateRequest;
use milahorros\Http\Requests\AdminUpdateRequest;
use milahorros\Http\Controllers\Controller;
use Session;
use Redirect;
use milahorros\Admin;
use Illuminate\Routing\Route;
class AdminController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }
    public function find(Route $route){
    $this->admin = Admin::find($route->getParameter('admins'));
    //return $this->user;
    }    
    public function index()
    {
        $admins = Admin::paginate(5);
        return view('admins.index', compact('admins'));
    }
    public function create()
    {
        return view('admins.create');
    }
    public function store(AdminCreateRequest $request)
    {
        Admin::create($request->all());
        Session::flash('message', 'Aministrador creado correctamente');
        return Redirect::to('/admins');        
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
        return view('admins.edit', ['admin' => $this->admin]); 
    }
    public function update(AdminUpdateRequest $request, $id)
    {
        $this->admin->fill($request->all());
        $this->admin->save();
        Session::flash('message', 'Admin editado correctamente');
        return Redirect::to('/admins');
    }
    public function destroy($id)
    {
        $this->admin->delete();
        Session::flash('message', 'Admin eliminado correctamente');
        return Redirect::to('/admins');
    }
}
