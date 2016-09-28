<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Entity;
use App\ItemExpediture;

class ItemExpeditureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $entity = Entity::findOrFail($id);
        $items = $entity->itemExpeditures;
        return view('item_expeditures.index')->with(['entity' => $entity, 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $inputs = $request->all();
        $entity = Entity::findOrFail($id);
        $item = new ItemExpediture($inputs);
        $entity->itemExpeditures()->save($item);
        flash('Objeto del gasto creado correctamente.', 'success');
        return redirect(route('propio_pymes.entidades.objetos.index', $entity->id));
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
    public function update(Request $request, $entityId,$id)
    {
        $inputs = $request->all();
        $entity = Entity::findOrFail($entityId);
        $item = $entity->itemExpeditures()->where('id', $id);
        $item->update($inputs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($entityId,$id)
    {
        $entity = Entity::findOrFail($entityId);
        $item = $entity->itemExpeditures()->where('id', $id);
        $item->delete();
        flash('Objeto del gasto borrado correctamente.', 'success');
        return redirect(route('propio_pymes.entidades.objetos.index', $entity->id));
    }
}
