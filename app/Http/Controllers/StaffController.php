<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StaffRequest;
use App\Staff;
use App\StaffPrimary;
use App\StaffSecondary;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $primary_staff = StaffPrimary::orderBy('orden', 'ASC')->get();
        $secondary_staff = StaffSecondary::orderBy('orden', 'ASC')->get();
        return view('staff.index')->with(['primary_staff' => $primary_staff, 'secondary_staff' => $secondary_staff]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       if( in_array($request->get('type'), ['primary', 'secondary']) ){
            if($request->get('type') == 'primary'){
                $staff = new StaffPrimary;
            }else{
                $staff = new StaffSecondary;
            }
            return view('staff.create')->withStaff($staff);
       }else{
            flash('Ocurrió un error al procesar su solicitud.', 'danger');
            return redirect(route('staff.index'));
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {
        $inputs = $request->all();
        if($request->input('type') == 'primary'){
            StaffPrimary::create($inputs);
        }else{
            StaffSecondary::create($inputs);
        }
        if ($request->hasFile('image_upload')) {
            $fileName = seoString($staff->full_name).'.'.$request->file('image_upload')->getClientOriginalExtension();
            $request->file('image_upload')->move(public_path('images/equipo'), $fileName);
            $staff->image = 'images/equipo/'.$fileName;
            $staff->save();
        }
        flash('Staff creado exitosamente.', 'success');
        return redirect(route('staff.index'));
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
        $staff = Staff::findOrFail($id);
        return view('staff.edit')->withStaff($staff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StaffRequest $request, $id)
    {
        $inputs = $request->all();
        $staff = Staff::findOrFail($id);
        $staff->update($inputs);
        if ($request->hasFile('image_upload')) {
            \File::delete($staff->image);
            $fileName = seoString($staff->full_name).'.'.$request->file('image_upload')->getClientOriginalExtension();
            $request->file('image_upload')->move(public_path('images/equipo'), $fileName);
            $staff->image = 'images/equipo/'.$fileName;
            $staff->save();
        }
        flash('Staff modificado correctamente.', 'success');
        return redirect(route('staff.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
        flash('Staff borrado correctamente.', 'success');
        return redirect(route('staff.index'));
    }
}
