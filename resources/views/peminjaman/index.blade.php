@extends('layout.master')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <div class="card-body">
                            @if(session('sukses'))
                            <div class="alert alert-success" role="alert">
                                {{session('sukses')}}
                            </div>
                            @endif

                            <a href="/tambah" class="btn btn-info btn-icon-text mt-2 mb-2 pull-right"><i class="ti-plus btn-icon-prepend"></i> Tambah</a>

                            <h4 class="title">Data Peminjaman</h4>
                            <p class="category">Berisi sekumpulan data mobil yang disewakan.</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>No Plat</th>
                                    <th>Nama Penyewa</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    @if(Auth::user()->id == 1)
                                    <th>Action</th>
                                    @endif
                                </thead>
                                <tbody>
                                    @php
                                    $no=1;
                                    @endphp
                                    @foreach($data_peminjaman as $peminjaman)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$peminjaman->mobil->no_plat}}</td>
                                        <td>{{$peminjaman->pengguna?->nama}}</td>
                                        <td>{{$peminjaman->tgl_mulai}}</td>
                                        <td>{{$peminjaman->tgl_selesai}}</td>
                                        @if(Auth::user()->id == 1)
                                        @method('delete')
                                        @csrf
                                        <td><a href="{{route('delete_peminjaman',$peminjaman->id)}}"
                                                class="btn btn-danger btn-sm delete"
                                                onclick="return confirm('Apakah Ingin Menghapus Data ini ?')"><i
                                                    class="ti-trash"></i></a></td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection