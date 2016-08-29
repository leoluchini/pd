<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\TopicRequest;
use App\Entity;
use App\Topic;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::all();
        return view('topics.index')->with(['topics' => $topics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entities = Entity::lists('name', 'id');
        return view('topics.create')->with(['entities' => $entities, 'currentEntities'=>null ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopicRequest $request)
    {
        $inputs = $request->all();
        $topic = Topic::create($inputs);
        $topic->entities()->attach($inputs['entities']);
        flash('Topico creado correctamente.', 'success');
        return redirect(route('plan_crecer.topicos.index'));
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
        $topic = Topic::findOrFail($id);
        foreach ($topic->entities as $entity) {
            $currentEntities[] = $entity->id;
        }
 
        if(empty($currentEntities)){
            $currentEntities = '';
        }
        $entities = Entity::lists('name', 'id');
        return view('topics.edit')->with(['entities' => $entities, 'currentEntities' => $currentEntities, 'topic' => $topic ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TopicRequest $request, $id)
    {
        $topic = Topic::findOrFail($id);
        $inputs = $request->all();
        $topic->update($inputs);
        $topic->entities()->sync($inputs['entities']);
        flash('Topico actualizado correctamente.', 'success');
        return redirect(route('plan_crecer.topicos.index'));
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
