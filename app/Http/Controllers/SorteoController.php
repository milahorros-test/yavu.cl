<?php

namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Requests\SorteoCreateRequest;
use yavu\Http\Requests\SorteoUpdateRequest;
use yavu\Http\Controllers\Controller;
use yavu\Sorteo;
use yavu\User;
use Session;
use Redirect;
use DB;
use Illuminate\Routing\Route;

class SorteoController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }
    public function find(Route $route){
        $this->sorteo = Sorteo::find($route->getParameter('sorteos'));
        //return $this->user;
    }        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $sorteos = DB::table('sorteos')->paginate(5);
        return view('sorteos.index', compact('sorteos'));

    }

    public function BuscarSorteos($nombre){

        $sorteos = DB::table('sorteos')                    
                    ->select('*')    
                    ->where('estado_sorteo', 'like', 'Aprobado') 
                    ->orwhere('nombre_sorteo', 'like', '%'.$nombre.'%')  
                    ->orwhere('descripcion', 'like', '%'.$nombre.'%')
                    ->orderBy('created_at','desc')   
                    ->get();

        //dd($empresas);
        return response()->json(
            $sorteos
        );
    } 
    public function CanjearTicket($user_id)
    {
        $coinsUsuario = DB::table('registro_coins')
                ->where('user_id', $user_id)
                ->sum('cantidad');     

        if($coinsUsuario >= 1000){            
            DB::table('registro_coins')->insert(
                ['user_id' => $user_id, 
                'motivo' => 'Canje de ticket',
                'cantidad' => '-1000'
                ]
            );            
        }else{
            return response()->json([
                "Mensaje: " => "Sin salido para el servicio"                
            ]);             
        }
        return response()->json([
            "Mensaje: " => "Creado"                
        ]);   
    }
    public function create()
    {
        return view('sorteos.create');
    }


    public function store(Request $request)
    {
        Sorteo::create($request->all());
        Session::flash('message', 'Sorteo creado correctamente');
    return Redirect::to('/sorteos/create');
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
                
                return view('sorteos.edit', ['sorteo' => $this->sorteo]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, SorteoUpdateRequest $request)

    {

        $this->sorteo->fill($request->all());
        $this->sorteo->save();
        Session::flash('message', 'sorteo validado correctamente');
        return Redirect::to('/sorteos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->sorteo->delete();
        Session::flash('message', 'Sorteo eliminado correctamente');
        return Redirect::to('/sorteos');
    }
}
