<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProfileRequest;

use Hash;
use Validator;

class ProfileController extends Controller
{
  public function edit()
  {
    $user = \Auth::user();
    return view('auth.profile')->withUser($user);
  }

  public function update(ProfileRequest $request)
  {
  	$user = \Auth::user();
  	$user->update($request->all());
    flash('Perfil actualizado correctamente', 'success');
    return redirect(route('trabajo.index'));
  }

  public function update_password(Request $request)
  {
    $user = \Auth::user();

    $validation = Validator::make($request->all(), [

      // Here's how our new validation rule is used.
      'old_password' => 'required|hash:' . $user->password,
      'password' => 'required|different:old_password|confirmed'
    ]);

    if ($validation->fails()) {
      return redirect()->back()->withErrors($validation->errors());
    }

    $user->password = $request->input('password');
    $user->save();
    
    flash('Perfil actualizado correctamente', 'success');
    return redirect('perfil');
  }
}
