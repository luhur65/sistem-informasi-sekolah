@extends('admin.index')
@section('content')
    
  <form action="/admin/uas/save" method="post">
    @csrf
    <div class="input-group">
      {{-- <span class="input-group-text">With textarea</span> --}}
      <textarea class="form-control" name="dharmasitumorang"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Kirim!!</button>
  </form>

@endsection