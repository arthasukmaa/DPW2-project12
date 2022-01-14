<?php  

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

  function showlogin(){
    return view('template.login');
  }

  function loginproces(){
    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
      return redirect('admin/dashboard')->with('success', 'login berhasil');
    }else{
      return back()->with('danger','login anda gagal');
    }

  }

  function logout(){
    Auth::logout();
    return redirect('login');
  }

}