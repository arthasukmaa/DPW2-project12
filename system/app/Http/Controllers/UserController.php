<?php  

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetails;

class UserController extends Controller {
  function index(){
    $data['list_user']= User::withCount('produk')->get();
    return view('template.user.index', $data);
  }

  function create(){
    return view('template.user.create');
  }

  function store (){
    $user = new User;
    $user->nama = request('nama');
    $user->username = request('username');
    $user->email = request('email');
    if(request('jenis_kelamin') == 'laki-laki') {
       $user->jenis_kelamin = "1";
    } else {
      $user->jenis_kelamin = "2";
    };
    $user->password = ('password');
    $user->save();

    $userDetail = new UserDetails();
    $userDetail->id_user = $user->id;
    $userDetail->no_handphone = request('no_handphone');
    $userDetail->save();

    return redirect('admin/user')->with('success','berhasil di tambahkan' );
  }

  function show(User $user){
    $data['user']=$user;
    return view('template.user.show', $data);
  }

  function edit(User $user){
    $data['user']= $user;
    return view('template.user.edit', $data);
  }

  function update(User $user){
    $user->nama = request('nama');
    $user->username = request('username');
    $user->email = request('email');
   if(request('password'))$user->password = ('password');
    $user->save();

    return redirect('admin/user')->with('success','berhasil di Edit' );
  }

  function destroy(User $user){
    $user->delete();
    return redirect('admin/user')->with('danger','berhasil di hapus' );
  }
}