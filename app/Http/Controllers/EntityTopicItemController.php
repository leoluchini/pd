<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Entity;

class EntityTopicItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $entityId, $topicId)
    {
        $entity = Entity::find($entityId);
        $topic = $entity->topics()->where('id', $topicId)->first();

        if($request->ajax()){
            return response()->json(array('html' => view('items.items', ['topic' => $topic, 'entity' => $entity ])->render()));
        }else{
            return view('item.index', ['topic' => $topic ]);
        }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $entityId, $topicId, $id)
    {
        $item = Entity::find($entityId)->topics()->where('id', $topicId)->first()->items()->where('id', $id)->first();
        if($request->ajax()){
            return response()->json(array('html' => view('items.show', ['item' => $item ])->render()));
        }else{
            return view('item.index', ['topic' => $topic ]);
        }
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
