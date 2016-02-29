<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Controllers\Controller;
use yavu\Http\Requests\FeedCreateRequest;
use yavu\Http\Requests\FeedUpdateRequest;
use Session;
use Redirect;
use yavu\Feed;
use yavu\Estado;
use Auth;
use Illuminate\Routing\Route;
use DB;
class FeedController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }
    public function find(Route $route){
        $this->feed = Feed::find($route->getParameter('feeds'));
        //return $this->user;   
    }       
    public function index()
    {
        $feeds = Estado::paginate(10);
        return view('feeds.index', compact('feeds'));    
    }
    public function create()
    {
        return view('feeds.create');
    }
    public function store(FeedCreateRequest $request)
    {
        Feed::create($request->all());
        Session::flash('message', 'Feed realizado correctamente');
        return Redirect::to('/feeds');        
    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        return view('feeds.edit', ['feed' => $this->feed]);
    }
    public function update(FeedUpdateRequest $request, $id)
    {
        $this->feed->fill($request->all());
        $this->feed->save();
        Session::flash('message', 'Feed editado correctamente');
        return Redirect::to('/feeds');
    }
    public function destroy($id)
    {
        $this->feed->delete();
        Session::flash('message', 'Feed eliminado correctamente');
        return Redirect::to('/feeds');           
    }
}
