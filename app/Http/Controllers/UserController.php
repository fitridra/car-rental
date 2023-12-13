<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
	public function index(Request $request)
	{
		$data_user = User::paginate(5);
		
		return view('user.index', compact('data_user'));
	}

	public function tambah(Request $request)
	{

		$pengguna = new User;
		$pengguna->username = $request->username;
		$pengguna->password = bcrypt($request->get('password'));
		$pengguna->nama = $request->nama;
		$pengguna->alamat = $request->alamat;
		$pengguna->no_telp = $request->no_telp;
		$pengguna->no_sim = $request->no_sim;
		$pengguna->save();

		return redirect()->route('user')->with('sukses', 'Data Berhasil Ditambahkan');
	}

	public function edit($id)
	{
		$user = User::where('username', $id)->first();
		return view('user/edit', compact('user'));
	}

	public function update(Request $request, $id)
	{

		$user = User::where('username', $id)->first();
		$user->where('username', $user->username)
			->update([
				'username' => $request->input('username'),
				'nama' => $request->input('nama'),
				'alamat' => $request->input('alamat'),
				'no_telp' => $request->input('no_telp'),
				'no_sim' => $request->input('no_sim'),
			]);
		return redirect()->route('user')->with('sukses', 'Data Berhasil Diubah');
	}

	public function delete($id)
	{

		User::where('username', $id)->delete();
		return redirect()->route('user')->with('sukses', 'Data Berhasil Dihapus');
	}
}