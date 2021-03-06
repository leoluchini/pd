<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ServiceRequest;
use App\Service;
use Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('orden', "asc")->get();
        return view('services.index')->withServices($services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = new Service;
        return view('services.create')->withService($service);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $inputs = $request->all();
        $service = Service::create($inputs);
        if ($request->hasFile('image_upload')) {
            $fileName = seoString($service->name).'.'.$request->file('image_upload')->getClientOriginalExtension();
            $request->file('image_upload')->move(public_path('images/servicios'), $fileName);
            $service->image = 'images/servicios/'.$fileName;
            $service->save();
        }
        flash('Servicio creado correctamente.', 'success');
        return redirect(route('servicios.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('services.show')->withService($service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit')->withService($service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $inputs = $request->all();
        $service = Service::findOrFail($id);
        $service->update($inputs);
        if ($request->hasFile('image_upload')) {
            \File::delete($service->image);
            $fileName = seoString($service->name).'.'.$request->file('image_upload')->getClientOriginalExtension();
            $request->file('image_upload')->move(public_path('images/servicios'), $fileName);
            $service->image = 'images/servicios/'.$fileName;
            $service->save();
        }
        flash('Servicio actualizado correctamente.', 'success');
        return redirect(route('servicios.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        \File::delete($service->image);
        $service->delete();
        flash('Servicio borrado correctamente.', 'success');
        return redirect(route('servicios.index'));
    }

    public function change_privacity($id)
    {
        $service = Service::findOrFail($id);
        $service->change_privacity();
        $service->save();
        flash('Privacidad cambiada correctamente.', 'success');
        return redirect(route('servicios.index'));
    }

    public function change_orden(Request $request, $id)
    {
        $inputs = $request->all();
        $service = Service::findOrFail($id);
        $service->update($inputs);
        return response()->json(array('status' => 200, 'orden' => $service->orden));
    }

    public function suscribe(Request $request, $id)
    {
        $inputs = $request->only('email');
        $service = Service::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {;
            return response()->json($validator->messages(), 400);
        }
        
        $service->suscribers()->firstOrCreate($inputs);
        return response()->json(array('status' => 200));
    }
}
