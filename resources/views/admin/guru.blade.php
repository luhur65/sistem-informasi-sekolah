@extends('admin.index')
@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title mb-0">Tabel Data Guru</h5>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NIP</th>
        <th scope="col">Nama Guru</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Bidang Studi</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 0; ?>
      @foreach ($guru as $g)
      <tr>
        <th scope="row">{{ $guru->firstItem() + $i++ }}</th>
        <td>{{ $g['nip'] }}</td>
        <td>{{ $g['nama'] }}</td>
        <td>{{ $g['tlahir'] }}</td>
        <td>{{ $g['tgllahir'] }}</td>
        <td>{{ $g['alamat'] }}</td>
        <td>{{ $g['bidangstudi'] }}</td>
        <td>
          <a href="/admin/editguru/{{ $g['nip'] }}">Edit</a>
          <a href="/admin/hapusguru/{{ $g['nip'] }}">Hapus</a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
Ditampilkan {{ $guru->firstItem() }} sampai {{ $guru->lastItem() }} dari {{ $guru->total() }}
{{ $guru->links("pagination::bootstrap-4") }}
@endsection