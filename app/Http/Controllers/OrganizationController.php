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
    public function index($idEntity, $idItemExpediture)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $organizations = $item->organizations;
        return view('organizations.index')->with(['entity' => $entity,'item' => $item, 'organizations' => $organizations]);
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
        return view('organizations.create')->with(['entity' => $entity,'item' => $item]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganizationRequest $request, $idEntity, $idItemExpediture)
    {
        $inputs = $request->all();
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $organization = new Organization($inputs); 
        $item->organizations()->save($organization);
        flash('Organización creada correctamente', 'success');
        return redirect(route('propio_pymes.entidades.objetos.organismos.show', [$entity->id, $item->id, $organization->id]));
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
        $organization = $item->organizations()->where('id', $id)->first();
        return view('organizations.show')->with(['entity' => $entity,'item' => $item, 'organization'=>$organization]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idEntity, $idItemExpediture, $id)
    {
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $organization = $item->organizations()->where('id', $id)->first();
        return view('organizations.edit')->with(['entity' => $entity,'item' => $item, 'organization'=>$organization]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrganizationRequest $request, $idEntity, $idItemExpediture, $id)
    {
        $inputs = $request->all();
        $entity = Entity::findOrFail($idEntity);
        $item = $entity->itemExpeditures()->where('id', $idItemExpediture)->first();
        $organization = $item->organizations()->where('id', $id)->first(); 
        $organization->update($inputs);
        flash('Organización actualizada correctamente', 'success');
        return redirect(route('propio_pymes.entidades.objetos.organismos.show', [$entity->id, $item->id, $organization->id]));
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
        $organization = $item->organizations()->where('id', $id)->first(); 
        $organization->delete();
        flash('Organización borrada correctamente', 'success');
        return redirect(route('propio_pymes.entidades.objetos.organismos.index', [$entity->id, $item->id]));
    }
}
