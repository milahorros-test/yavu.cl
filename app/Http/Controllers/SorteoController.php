<?php

namespace yavu\Http\Controllers;
use Illuminate\Http\Request;
use yavu\Http\Requests;
use yavu\Http\Requests\SorteoCreateRequest;
use yavu\Http\Controllers\Controller;
use yavu\Sorteo;
use Session;
use Redirect;
use DB;

class SorteoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sorteos = Sorteo::all();
        return view('sorteos.index', compact('sorteos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sorteos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function update(SorteoUpdateRequest $request, $id)

    {

        $this->sorteo->fill($request->all());
        $this->sorteo->save();
        Session::flash('message', 'sorteo validado correctamente');
        return Redirect::to('/admins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->admin->delete();
        Session::flash('message', 'Sorteo eliminado correctamente');
        return Redirect::to('/admins');
    }
}
