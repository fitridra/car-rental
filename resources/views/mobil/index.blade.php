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

                            <h4 class="title">Data Mobil</h4>
                            <p class="category">Berisi sekumpulan data mobil yang tersedia untuk di sewa.</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                    <th>No</th>
                                    <th>Merk</th>
                                    <th>Model</th>
                                    <th>No Plat</th>
                                    <th>Tarif</th>
                                    <th colspan="2">Action</th>
                                </thead>
                                <tbody>
                                    @php
                                    $no=1;
                                    @endphp
                                    @foreach($data_mobil as $mobil)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$mobil->merk}}</td>
                                        <td>{{$mobil->model}}</td>
                                        <td>{{$mobil->no_plat}}</td>
                                        <td>{{$mobil->tarif}}</td>
                                        @if(Auth::user()->id == 1)
                                        @csrf
                                        <td><a href="{{route('edit_mobil',$mobil->id)}}"
                                                class="btn btn-warning btn-sm"><i class="ti-pencil-alt"></i></a></td>
                                        @method('delete')
                                        @csrf
                                        <td><a href="{{route('delete_mobil',$mobil->id)}}"
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