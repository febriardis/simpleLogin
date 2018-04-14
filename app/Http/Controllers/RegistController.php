<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Peserta;

class RegistController extends Controller
{
    function create(Request $req)
    {
		$this->validate($req, [
			'username' => 'required|string|max:255',
            'password' => 'required|string|min:6|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9]).*$/|confirmed',
        ]);

    	$table = new Peserta;
    	$table->username = $req->username;
    	$table->password = Hash::make($req->password);
    	$table->save();

    	return redirect('/login')
	   	->with('message', 'berhasil mendaftar');
    }

}
