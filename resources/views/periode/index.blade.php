@extends('main')

@section('title', 'periode')
@section('content')
<a href={{ route('periode.create') }} class="btn btn-primary mb-3">Tambah Periode</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
    </tr>

    @foreach ($result as $item)
    <tr>
        <td>{{ $loop ->iteration }}</td>
        <td>{{ $item->nama_prodi }}</td>
        <td>{{ $item->singkatan }}</td>
        <td>{{ $item->kaprodi }}</td>
        <td>{{ $item->fakultas_id }}</td>
    </tr>
    @endforeach
</table>
@endsection

{{-- <h2>Data Periode</h2>
@foreach ($result as $item)
    {{ $item->nama, }} - {{ $item->singkatan }} - {{ $item->dekan }} <br/>
@endforeach --}}