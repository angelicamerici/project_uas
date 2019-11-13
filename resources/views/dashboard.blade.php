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
    <div class="row">
        <div class="col-lg-2 col-sm-6">
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="card-title text-white">Saldo ku</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">Rp. 4565</h2>
                            <p class="text-white mb-0">Jan - March 2019</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class="card-title text-white">Total Pengeluaran</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">Rp. 8541</h2>
                        <p class="text-white mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                </div>
            </div>
        </div>
        
        <div class="col-lg-2 col-sm-6">
        </div>
    </div>
    @foreach($histori as $value)
    <div class="row">
        <div class="col-lg-2 col-sm-6">
        </div>
        <div class="col-lg-8 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{$value->created_at}}</h2>
                    <div class="basic-form">
                        <h2>{{$value->kategori_id}}</h2><br>
                        @if($value->katspec_id!==null)
                            <h5>{{$value->katspec_id}}</h5>
                        @endif
                        <h2>{{$value->nominal}}</h2>
                        <!-- lanjutan disini liat file lain hampir sama strukturnya -->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-2 col-sm-6">
        </div>
    </div>
    @endforeach
    
</div>
@endsection('content')