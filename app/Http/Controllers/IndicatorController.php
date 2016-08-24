<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IndicatorRequest;

use App\Http\Requests;
use App\Indicator;

class IndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicators = Indicator::all();
        return view('indicators.index')->withIndicators($indicators);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indicators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndicatorRequest $request)
    {
        $inputs = $request->all();
        Indicator::create($inputs);
        flash('Indicador creado correctamente.', 'success');
        return redirect(route('indicadores.index'));
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
        $indicator = Indicator::findOrFail($id);
        return view('indicators.edit')->withIndicator($indicator);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IndicatorRequest $request, $id)
    {
        $inputs = $request->all();
        $indicator = Indicator::findOrFail($id);
        $indicator->update($inputs);
        flash('Indicador actualizado correctamente.', 'success');
        return redirect(route('indicadores.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indicator = Indicator::findOrFail($id);
        $indicator->delete();
        flash('Indicador borrado correctamente.', 'success');
        return redirect(route('indicadores.index'));
    }
}
