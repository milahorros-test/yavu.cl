<?php
namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use Session;
use Redirect;
use Auth;
use yavu\Http\Controllers\Controller;
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

    }
    public function create()
    {

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
