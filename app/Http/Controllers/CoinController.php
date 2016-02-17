<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Requests\CoinCreateRequest;
use yavu\Http\Requests\CoinUpdateRequest;
use yavu\Http\Controllers\Controller;
use Session;
use Redirect;
use yavu\RegistroCoin;
use Illuminate\Routing\Route;
use Auth;
use DB;

class CoinController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }
    public function find(Route $route){
        $this->user = User::find($route->getParameter('usuarios'));
        //return $this->user;   
    }     
    public function index()
    {
        //$coin = new CoinController;
        $historialcoins = $this->HistorialCoins();
        //dd($historialcoins);
        return view('coins.index', compact('historialcoins'));   
    }
    public function create()
    {
        return view('coins.create');
    }
    public function ContarCoins(){   
        $coins = DB::table('registro_coins')
                    ->select(DB::raw('sum(cantidad) as coins'))
                    ->where('user_id', '=', Auth::user()->get()->id)   
                    ->groupBy('user_id')
                    //->orderBy('created_at','desc')   
                    ->get();        
        return response()->json(
            $coins
        );
    }    
    public function HistorialCoins(){   
        $historialcoins = DB::table('registro_coins')
                    ->join('users', 'users.id', '=', 'registro_coins.user_id')   
                    ->select(DB::raw('registro_coins.*', 'users.nombre'))
                    ->where('user_id', '=', Auth::user()->get()->id)   
                    ->orderBy('created_at','desc')   
                    ->limit('10')
                    ->get();        
        return response()->json(
            $historialcoins
        );
    }  
    public function store(CoinCreateRequest $request)
    {
        RegistroCoin::create($request->all());
        Session::flash('message', 'Carga creada correctamente');
        return Redirect::to('/coins/create');
    }
    public function show($id)
    {

    }
    public function edit($id)
    {

    }
    public function update(CoinUpdateRequest $request, $id)
    {
      $this->coin->fill($request->all());
      $this->coin->save();
      Session::flash('message', 'Carga editada correctamente');
      return Redirect::to('/coins');
    }
    public function destroy($id)
    {

    }
}
