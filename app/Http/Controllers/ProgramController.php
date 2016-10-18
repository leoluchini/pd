<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProgramRequest;
use App\Entity;
use App\Program;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idEntity, $idItemExpediture)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $programs = $item->programs;
        return view('programs.index')->with(['entity' => $entity,'item' => $item, 'programs' => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idEntity, $idItemExpediture)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        return view('programs.create')->with(['entity' => $entity,'item' => $item]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramRequest $request, $idEntity, $idItemExpediture)
    {
        $inputs = $request->all();
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = new Program($inputs); 
        $item->programs()->save($program);
        flash('Programa creado correctamente', 'success');
        return redirect(route('propio_pymes.entidades.objetos.programas.organismos.index', [$entity->id, $item->id, $program->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEntity, $idItemExpediture, $id)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $id)->first();
        return view('programs.show')->with(['entity' => $entity,'item' => $item, 'program'=>$program]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEntity, $idItemExpediture, $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramRequest $request, $idEntity, $idItemExpediture, $id)
    {
        $inputs = $request->all();
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $id)->first(); 
        $program->update($inputs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEntity,$idItemExpediture, $id)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $id)->first(); 
        $program->delete();
        flash('Programa borrado correctamente', 'success');
        return redirect(route('propio_pymes.entidades.objetos.programas.index', [$entity->id, $item->id]));
    }
}
