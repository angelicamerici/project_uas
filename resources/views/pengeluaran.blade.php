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
            <h3 class="card-title">Daftar jenis pengeluaran</h3>
            <div class="basic-form">
                <a class="btn mb-1 btn-success" role="button" style="float: right; margin-left: 20px;" href="{{url('jenispengeluaran/input')}}"> Tambah jenis pengeluaran Baru <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>   
                <div class="col-12 col-sm-12 col-lg-12 table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Nama jenis pengeluaran</th>
                                <th>pengeluaran Dari</th>
                                <th>Jumlah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>2011/04/25</td>
                                <td>System Architect</td>
                                <td>61</td>
                                <td>$320,800</td>
                                <td>
                                    <!-- <a href="{{url('jenispengeluaran/edit/'.$d->id)}}">EDIT</a>
                                    <form method="POST" action="{{url('jenispengeluaran/delete/'.$d->id)}}">
                                        {{ csrf_field() }}
                                        <input type="submit" name="" value="DELETE">
                                    </form> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection('content')