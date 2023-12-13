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
                        <form action="/kembali" action="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>No Plat</label>
                                        <input type="text" class="form-control border-input" placeholder="No Plat">
                                    </div>
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