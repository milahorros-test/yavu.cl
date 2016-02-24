<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Controllers\Controller;
use Session;
use Redirect;
use yavu\Banner;
use Auth;
use Illuminate\Routing\Route;
use DB;

class BannerController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }
    public function find(Route $route){
        $this->banner = Banner::find($route->getParameter('banners'));
        //return $this->user;   
    }         
    public function index()
    {   
        
        $banners = Banner::all();
        return view('banners.index', compact('banners'));

    }
    public function create()
    {
        return view('banners.create');
    }

    public function store(Request $request)
    {
        Banner::create($request->all());
        Session::flash('message', 'Banner creado correctamente');
    return Redirect::to('/banners/create');
    }
    public function show($id)
    {

    }
     public function edit($id)

    {           
        return view('banners.edit', ['banner' => $this->banner]); 
    }

    public function update(BannerUpdateRequest $request, $id)

    {

        $this->banner->fill($request->all());
        $this->banner->save();
        Session::flash('message', 'banner validado correctamente');
        return Redirect::to('/banners');
    }
    public function destroy($id)
    {

    }
}
