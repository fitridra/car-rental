@extends('layout.master')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Form Pengembalian</h4>
                    </div>
                    <div class="content">
                        <form method="GET" action="/kembali">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>No Plat</label>
                                        <select class="form-control" name="cari">
                                            <option selected>Pilih Mobil</option>
                                            @foreach($data as $p)
                                            <option value="{{$p->id_mobil}}">{{$p->mobil->no_plat}} || {{ $p->mobil->merk}} - {{$p->mobil->model}}</option>
                                            @endforeach
                                        </select>                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Lakukan Pengembalian</button>
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