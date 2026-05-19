@extends('main')

@section('title','edit fakultas')

@section('content')
    <form action="{{ route('fakultas.update', $fakultas->id) }}" method="post">
        @method('PUT')
        @csrf
        
        <div class="form-group">
            <label for="nama" class="form-label">nama fakultas</label>
            <input name = 'nama' type="text" class="form-control" value="{{ old('nama') ?? $fakultas->nama }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan" class="form-label">singkatan fakultas</label>
            <input name ='singkatan' type="text" class="form-control" value="{{ old('singkatan') ?? $fakultas->singkatan }}" placeholder="masukkan singkatan fakultas...">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="dekan" class="form-label">nama dekan</label>
            <input name='dekan' type="text" class="form-control" value="{{ old('dekan') ?? $fakultas->dekan }}" placeholder="masukkan nama dekan...">
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