@extends('admin.index')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Tabel Data Seluruh Siswa</h5>
        <div class="table-responsive">
            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="zero_config_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 5px;">
                                            No</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 40px;">
                                            NIS</th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 100px;">Name</th>
                                        {{-- <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                aria-label="Office: activate to sort column ascending"
                                style="width: 50.219px;">Tempat Lahir</th>
                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                aria-label="Age: activate to sort column ascending" style="width: 50px;">Tanggal Lahir
                            </th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 140.047px">Alamat</th>
                                        {{-- <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending"
                                style="width: 40.8906px;">No Handphone</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 40.8906px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($siswa as $s)
                                    <tr role="row" class="odd">
                                        <td>{{ $siswa->firstItem() + $i++ }}</td>
                                        <td class="sorting_1">{{ $s['nis'] }}</td>
                                        <td>{{ $s['nama'] }}</td>
                                        {{-- <td>{{ $s['tempatlahir'] }}</td>
                                        <td>{{ $s['tgllahir'] }}</td> --}}
                                        <td>{{ $s['alamat'] }}</td>
                                        {{-- <td>{{ $s['nohp'] }}</td> --}}
                                        <td>
                                            <a href="#" class="btn btn-primary mb-2 rounded-circle btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#modal{{ $s['nis'] }}">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="/admin/editsiswa/{{ $s['nis'] }}"
                                                class="btn btn-warning mb-2 btn-sm rounded-circle">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                            <a href="/admin/hapussiswa/{{ $s['nis'] }}"
                                                class="btn btn-danger rounded-circle mb-2 btn-sm">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                {{-- <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Name</th>
                            <th rowspan="1" colspan="1">Position</th>
                            <th rowspan="1" colspan="1">Office</th>
                            <th rowspan="1" colspan="1">Age</th>
                            <th rowspan="1" colspan="1">Start date</th>
                            <th rowspan="1" colspan="1">Salary</th>
                        </tr>
                    </tfoot> --}}
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">
                            Ditampilkan {{ $siswa->firstItem() }} sampai {{ $siswa->lastItem() }} dari
                            {{ $siswa->total() }}
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        {{ $siswa->links("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
@foreach ($siswa as $s)
<div class="modal fade" id="modal{{ $s['nis'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info Detail Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-3">NIS</dt>
                    <dd class="col-sm-9">{{ $s['nis'] }}</dd>

                    <dt class="col-sm-3">Nama Lengkap</dt>
                    <dd class="col-sm-9">
                        <p>{{ $s['nama'] }}</p>
                    </dd>

                    <dt class="col-sm-3 mb-3">Tempat/ Tanggal Lahir</dt>
                    <dd class="col-sm-9">{{ $s['tempatlahir'] }}, {{ $s['tgllahir'] }}</dd>

                    <dt class="col-sm-3 text-truncate mb-3">Alamat</dt>
                    <dd class="col-sm-9">{{ $s['alamat'] }}</dd>

                    <dt class="col-sm-3 mb-3">No Handphone</dt>
                    <dd class="col-sm-9">{{ $s['nohp'] }}</dd>

                    <dt class="col-sm-3">Nama Orangtua</dt>
                    <dd class="col-sm-9">
                        <dl class="row">
                            <dt class="col-sm-4">Ayah</dt>
                            <dd class="col-sm-8">{{ $s['namaayah'] }}</dd>
                            <dt class="col-sm-4">Ibu</dt>
                            <dd class="col-sm-8">{{ $s['namaibu'] }}</dd>
                        </dl>
                    </dd>

                </dl>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
