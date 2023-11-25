@extends('layouts.dashboard_master')
@section('content')
<div class="container">
    <form action="{{ route('mahasiswa.update', $dataMhs['npm']) }}", method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" value="{{ $dataMhs['npm'] }}">
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" value="{{ $dataMhs['nama'] }}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
