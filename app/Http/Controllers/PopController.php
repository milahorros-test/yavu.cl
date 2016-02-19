<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Controllers\Controller;
use Session;
use Redirect;
use yavu\RegistroCoin;
use Auth;
use Illuminate\Routing\Route;
use DB;
class PopController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }
    public function find(Route $route){
        $this->pop = Pop::find($route->getParameter('pops'));
        //return $this->user;   
    }         
    public function index()
    {
        
        return view('pops.index');
    }
    public function create()
    {

    }
    public function store(Request $request)
    {

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
