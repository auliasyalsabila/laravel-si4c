@extends('main')
@section('title','tambah fakultas')
@section('content')
    <form action="{{ route('fakultas.create') }}" method="post"></form>

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
    <form action="{{ route('fakultas.store') }}" method="post">
        
        <div class="form-group">
            <label for="nama" class="form-label">nama fakultas</label>
            <input name = 'nama' type="text" class="form-control" value="{{ old('nama') }}" placeholder="masukkan nama fakultas...">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan" class="form-label">singkatan fakultas</label>
            <input name ='singkatan' type="text" class="form-control" value="{{ old('singkatan') }}" placeholder="masukkan singkatan fakultas...">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="dekan" class="form-label">nama dekan</label>
            <input name='dekan' type="text" class="form-control" value="{{ old('dekan') }}" placeholder="masukkan nama dekan...">
            @error('dekan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
@endsection