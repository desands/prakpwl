@extends('layouts.dashboard_master')
@section('content')
<div class="container">
    <h1 class="text-center">Data Mahasiswa</h1>
    <table class="table text-center">
        <thead>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $key => $mhs)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $mhs['npm'] }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $mhs['npm']) }}" class="btn btn-warning">Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
