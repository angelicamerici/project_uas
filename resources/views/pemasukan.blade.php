@extends('layout.app')

@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
    </ol>
    </div>
</div>

<div class="container-fluid">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Daftar jenis pemasukan</h3>
            <div class="basic-form">
                <a class="btn mb-1 btn-success" role="button" style="float: right; margin-left: 20px;" href="{{url('jenispemasukan/input')}}"> Tambah jenis pengeluaran Baru <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>   
                <div class="col-12 col-sm-12 col-lg-12 table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Nama jenis pemasukan</th>
                                <th>Pemasukan Dari</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>System Architect</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
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


@endsection('content')