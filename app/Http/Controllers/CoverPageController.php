<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CoverPageRequest;
use App\CoverPage;

class CoverPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cover_pages = CoverPage::orderBy('orden', 'ASC')->get();
        return view('cover_pages.index')->withCoverPages($cover_pages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cover_page = CoverPage::findOrFail($id);
        return view('cover_pages.edit')->withCoverPage($cover_page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoverPageRequest $request, $id)
    {
        $inputs = $request->all();
        $cover_page = CoverPage::findOrFail($id);
        $cover_page->update($inputs);
        if ($request->hasFile('image_upload')) {
            \File::delete($cover_page->image);
            $fileName = seoString($cover_page->tittle).'.'.$request->file('image_upload')->getClientOriginalExtension();
            $request->file('image_upload')->move(public_path('images/portadas'), $fileName);
            $cover_page->image = 'images/portadas/'.$fileName;
            $cover_page->save();
        }
        flash('Portada actualizada correctamente.', 'success');
        return redirect(route('portada.index'));
    }


    public function change_orden(Request $request, $id)
    {
        $inputs = $request->all();
        $cover_page = CoverPage::findOrFail($id);
        $cover_page->update($inputs);
        return response()->json(array('status' => 200, 'orden' => $cover_page->orden));
    }
}
