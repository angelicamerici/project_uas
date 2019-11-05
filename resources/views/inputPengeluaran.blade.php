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
			<h2 class="card-title">Tambah pengeluaran</h2>
			<div class="basic-form">
				<form class="col-sm-8">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Tanggal pengeluaran</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Pengeluaran</label>
						<div class="col-sm-7">
                            <select id="inputState" class="form-control">
                            	<option selected="selected">Choose...</option>
                            	<option>Option 2</option>
                            	<option>Option 3</option>
                            </select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Tipe pengeluaran</label>
						<div class="col-sm-7">
                            <select id="inputState" class="form-control">
                            	<option selected="selected">Choose...</option>
                            	<option>Option 1</option>
                            	<option>Option 2</option>
                            	<option>Option 3</option>
                            </select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Jumlah pengeluaran</label>
						<div class="col-sm-7">
							<div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Rp.</span>
                                            </div>
                                            <input type="number" class="form-control">
                                        </div>
						</div>
					</div>
				</form>
				<button type="button" class="btn mb-1 btn-success" style="float: right; margin-left: 20px;">Simpan <span class="btn-icon-right"><i class="fa fa-envelope"></i></span></button>
					<button type="button" class="btn mb-1 btn-danger" style="float: right;">Batal <span class="btn-icon-right"><i class="fa fa-close"></i></span></button>
			</div>
		</div>
	</div>
</div>
</div>

@endsection('content')