<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use App\Evento;
use App\user;

class RegistroController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        $eventos = Evento::all();
        return view('registros.index')->with('registros', $registros)->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = Eventos::all();
        $atleta = Auth::id;

        return view('registros.create')->with('eventos', $eventos)->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'evento_id' => 'required',
            'data' => 'required|max:10',
        ));

        $evento = new Evento;

        $evento->evento_id = $request->evento_id;
        $evento->atleta_id = 3;
        $evento->atleta_id = Auth::user->id;
        $evento->pago = true;
        $evento->pago = $request->pago;

        $evento->save();

        Session::flash('success', 'Evento registrado');

        return redirect()->route('registros.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
