@extends('main')

@section('title', 'tambah periode')
@section('content') 
    <form action="{{ route('periode.store') }}" method="post">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <form action="{{ route('periode.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama_prodi" class="form-label">nama prodi</label>
            <input name='nama_prodi' type="text" class="form-control" value="{{ old('nama_prodi') }}" placeholder="masukkan nama prodi...">
            @error('nama_prodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>  
        <div class="form-group">
            <label for="singkatan" class="form-label">singkatan prodi</label>
            <input name='singkatan' type="text" class="form-control" value="{{ old('singkatan') }}" placeholder="masukkan singkatan prodi...">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kaprodi" class="form-label">nama kaprodi</label>
            <input name='kaprodi' type="text" class="form-control" value="{{ old('kaprodi') }}" placeholder="masukkan nama kaprodi...">
            @error('kaprodi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="fakultas_id" class="form-label">fakultas</label>
            <input name='fakultas_id' type="text" class="form-control" value="{{ old('fakultas_id') }}" placeholder="masukkan nama fakultas...">
            @error('fakultas_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
