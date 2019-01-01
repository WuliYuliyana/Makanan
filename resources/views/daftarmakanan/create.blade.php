@extends('layouts.app')

@section('content')
<h4>Makanan</h4>
<form action="{{ route('daftarmakanan.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label for="nama" class="control-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="nama">
        @if ($errors->has('title'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label for="deskripsi" class="control-label">Deskripsi</label>
        <textarea name="deskripsi" cols="30" rows="5" class="form-control"></textarea>
        @if ($errors->has('content'))
            <span class="help-block">{{ $errors->first('deskripsi') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('daftarmakanan.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection