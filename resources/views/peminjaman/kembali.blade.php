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

                            <h4 class="title">Data kembali</h4>
                            <p class="category">Berisi sekumpulan data mobil yang disewakan.</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>No Plat</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Jumlah Biaya</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @php
                                    $no=1;
                                    @endphp
                                    @foreach($data_kembali as $kembali)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$kembali->mobil->no_plat}}</td>
                                        <td>{{$kembali->tgl_mulai}}</td>
                                        <td>{{$kembali->tgl_selesai}}</td>
                                        <td>{{$kembali->jumlah_biaya}}</td>
                                        @if(Auth::user()->id == 1)
                                        @method('delete')
                                        @csrf
                                        <td><a href="{{route('delete_kembali',$kembali->id)}}"
                                                class="btn btn-danger btn-sm delete"
                                                onclick="return confirm('Apakah Ingin Menghapus Data ini ?')"><i
                                                    class="ti-trash"></i></a></td>
                                        @endif
                                        <td><a href="/kembali"
                                                class="btn btn-info btn-sm"
                                                onclick="return confirm('Total Biaya = Rp. {{$kembali->jumlah_biaya}}')"><i
                                                    class="ti-control-forward"></i></a></td>
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