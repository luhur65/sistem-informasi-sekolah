@extends('admin.index')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card p-2">
            <form class="form-horizontal" method="POST" action="/admin/siswa/input/save">
              @csrf 
                <div clas s="card-body">
                    <h4 class="card-title">Input Data Siswa</h4>
                    <div class="form-group row">
                        <label for="nis" class="col-sm-3 text-end control-label col-form-label">NIS Siswa</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nis" placeholder="NIS Siswa" name="nis">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-end control-label col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="tempatlahir" class="col-sm-3 text-end control-label col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir" name="tempatlahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgllahir" class="col-sm-3 text-end control-label col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tgllahir" placeholder="Tempat Lahir" name="tgllahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-3 text-end control-label col-form-label">No Handphone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nohp" placeholder="Contact No Here" name="nohp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ayah" class="col-sm-3 text-end control-label col-form-label">Nama Ayah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ayah" placeholder="Nama Ayah" name="ayah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ibu" class="col-sm-3 text-end control-label col-form-label">Nama Ibu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ibu" placeholder="Nama Ibu" name="ibu">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
