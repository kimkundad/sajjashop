<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('profile');
    }

    public function update_profile(Request $request){

        $id=Auth::user()->id;
          $package = User::find($id);
          $package->name = $request['name'];
          $package->phone = $request['phone'];
          $package->save();

        return redirect(url('/profile'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }
}
