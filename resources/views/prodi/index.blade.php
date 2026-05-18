@extends('main')
@section('title','prodi')

@section('content')
<table class="table table-bordered tabel-hover">
    <a href={{ route('prodi.create') }} class="btn btn-primary mb-3">Tambah Prodi</a>
    <table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
    </tr>

    @foreach($prodis as $key => $prodi)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>{{ $prodi->singkatan }}</td>
        <td>{{ $prodi->kaprodi }}</td>
        <td>{{ $prodi->fakultas->nama ?? '-' }}</td>
    </tr>
    @endforeach

</table>
@endsection