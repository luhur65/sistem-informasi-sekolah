@extends('admin.index')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card p-3">
            <form class="form-horizontabl" method="POST" action="/admin/guru/edit/save">
              @csrf 
                <div clas s="card-body">
                    <h4 class="card-title">Edit Data Guru</h4>
                    <div class="form-group row">
                        <label for="nip" class="col-sm-3 text-end control-label col-form-label">NIP Guru</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nip" placeholder="NIP Guru" name="nip" value="{{ $guru['nip'] }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 text-end control-label col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="{{ $guru['nama'] }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tlahir" class="col-sm-3 text-end control-label col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tlahir" placeholder="Tempat Lahir" name="tlahir" value="{{ $guru['tlahir'] }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgllahir" class="col-sm-3 text-end control-label col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tgllahir" placeholder="Tempat Lahir" name="tgllahir" value="{{ $guru['tgllahir'] }}">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat">{{ $guru['alamat'] }}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="bidangstudi" class="col-sm-3 text-end control-label col-form-label">Bidang Studi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="bidangstudi" placeholder="Bidang studi" name="bidangstudi" value="{{ $guru['bidangstudi'] }}">
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
