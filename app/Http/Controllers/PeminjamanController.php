<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data_peminjaman = Peminjaman::paginate(4);
	
		return view('peminjaman.index', compact('data_peminjaman'));
    }

    public function kembali(Request $request){
        $data_kembali = Peminjaman::when($request->cari, function ($query) use ($request) {
			$query->where('id_mobil', 'LIKE', "%{$request->cari}%");
		})->get();

		return view('peminjaman.kembali', compact('data_kembali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Peminjaman::get();
        return view('peminjaman/form1',compact('data'));
    }

    public function create2()
    {
        $data = Peminjaman::get();
        return view('peminjaman/form2',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
			'id_mobil' => 'required',
			'id_user' => 'required',
			'tgl_mulai' => 'required',
			'tgl_selesai' => 'required',
            'jumlah_biaya' => 'required',
		]);

		Peminjaman::create($validatedData);

		return redirect()->route('peminjaman')->with('sukses', 'Data Berhasil Ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
