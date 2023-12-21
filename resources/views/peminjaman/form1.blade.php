@extends('layout.master')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Form Peminjaman</h4>
                    </div>
                    <div class="content">
                        <form action="/tambah_peminjaman" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>No Plat</label>
                                        <select class="form-control" name="id_mobil">
                                            <option selected>Pilih Mobil</option>
                                            @foreach($data as $p)
                                            <option value="{{$p->mobil->id}}">{{$p->mobil->no_plat}} || {{ $p->mobil->merk}} - {{$p->mobil->model}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                            <input type="hidden" name="jumlah_biaya" value="0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="date" name="tgl_mulai" class="form-control border-input">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggal Selesai</label>
                                        <input type="date" name="tgl_selesai" class="form-control border-input">
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Lakukan Peminjaman</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>


@endsection