<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\OrganizationRequest;
use App\Entity;
use App\Organization;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idEntity, $idItemExpediture, $idProgram)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $idProgram)->first();
        $organizations = $program->organizations;
        return view('organizations.index')->with(['entity' => $entity,'item' => $item, 'program' => $program,'organizations' => $organizations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idEntity, $idItemExpediture, $idProgram)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $idProgram)->first();
        return view('organizations.create')->with(['entity' => $entity,'item' => $item, 'program' => $program]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganizationRequest $request, $idEntity, $idItemExpediture,$idProgram)
    {
        $inputs = $request->all();
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $idProgram)->first();
        $organization = new Organization($inputs); 
        $program->organizations()->save($organization);
        flash('Organización creada correctamente', 'success');
        return redirect(route('propio_pymes.entidades.objetos.programas.organismos.show', [$entity->id, $item->id, $program->id,$organization->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idEntity, $idItemExpediture, $idProgram, $id)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $idProgram)->first();
        $organization = $program->organizations()->where('id', $id)->first();
        return view('organizations.show')->with(['entity' => $entity,'item' => $item, 'program' => $program,'organization'=>$organization]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEntity, $idItemExpediture, $idProgram, $id)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $idProgram)->first();
        $organization = $program->organizations()->where('id', $id)->first();
        return view('organizations.edit')->with(['entity' => $entity,'item' => $item, 'program'=>$program,'organization'=>$organization]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrganizationRequest $request, $idEntity, $idItemExpediture, $idProgram,$id)
    {
        $inputs = $request->all();
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $idProgram)->first();
        $organization = $program->organizations()->where('id', $id)->first(); 
        $organization->update($inputs);
        flash('Organización actualizada correctamente', 'success');
        return redirect(route('propio_pymes.entidades.objetos.programas.organismos.show', [$entity->id, $item->id, $program->id,$organization->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEntity,$idItemExpediture, $idProgram, $id)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $program = $item->programs()->where('id', $idProgram)->first();
        $organization = $program->organizations()->where('id', $id)->first(); 
        $organization->delete();
        flash('Organización borrada correctamente', 'success');
        return redirect(route('propio_pymes.entidades.objetos.programas.organismos.index', [$entity->id, $item->id, $program->id]));
    }
}
