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
            <h2 class="card-title">Jenis pengeluaran</h2>
            <div class="basic-form">
                <ul> 
                @foreach ($kategoris as $kategori)
                    <li>{{ $kategori->name }}</li>
                @endforeach
                </ul>
                <!-- lanjutan disini liat file lain hampir sama strukturnya -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection('content')