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
			<h3 class="card-title">Tambah Jenis Pemasukan</h3>
			<div class="basic-form">
				<form class="col-sm-8">
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Nama Jenis Pemasukan</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="nama" placeholder="Jenis Pemasukan. co: Uang saku dari mama">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Pemasukan Dari</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="nama" id="nama_tipe" placeholder="Pemasukan dari co: OVO / TUNAI ">
						</div>
						<div class="col-sm-2" style="padding-left: 0;">
							<button type="button" class="btn mb-1 btn-primary" id="tambah_tipe">Tambahkan</button>
						</div>

					</div>
					<div class="form-group row">
						<div class="col-sm-4"><label></label></div>
                        <div class="basic-list-group col-sm-5">
                        	<ul class="list-group" id="show_tipe">
                        	</ul>
                    	</div>
					</div>
				</form>
				<div class="col-sm-12">
					<button type="button" class="btn mb-1 btn-success" style="float: right; margin-left: 20px;">Simpan <span class="btn-icon-right"><i class="fa fa-envelope"></i></span></button>
					<button type="button" class="btn mb-1 btn-danger" style="float: right;">Batal <span class="btn-icon-right"><i class="fa fa-close"></i></span></button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection('content')