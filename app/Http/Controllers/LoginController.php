<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $req)
	{
		if (Auth::guard('admin')->attempt([
			'username' => $req->username, 
			'password' => $req->password
		])) {
			return redirect('/admin');

		}else if (Auth::guard('peserta')->attempt([
			'username' => $req->username, 
			'password' => $req->password
		])) {
			return redirect('/peserta');

		}else{
			return "gagal login";
		}
	}

	function keluar() {
		if (Auth::guard('admin')->check()) {
			Auth::guard('admin')->logout();
		}

		elseif (Auth::guard('peserta')->check()) {
			Auth::guard('peserta')->logout();
		}
		return redirect('/login')
		->with('message', 'Berhasil Logout');
	}
}
