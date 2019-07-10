<?php

namespace App\Http\Controllers;

use App\Karta;
use Illuminate\Http\Request;

class KartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $karty=Karta::all();
      return view('karta.index',compact('karty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('karta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Karta::create($request->all());
        session()->flash('message','Dodano kartę zmian');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karta  $karta
     * @return \Illuminate\Http\Response
     */
    public function show(Karta $karta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karta  $karta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $karta = Karta::find($id);
      return view('karta.edit',compact('karta'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karta  $karta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     Karta::find($id)->update($request->all());
     session()->flash('message','zedytowano');
     return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karta  $karta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karta::find($id)->delete();
        session()->flash('message','usunięto');
        return back();
    }
}
