@extends('layouts.app')

@section('content')
<h4>Ubah Artikel</h4>
<form action="{{ route('daftarmakanan.update', $daftarmakanan->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Title</label>
        <input type="text" class="form-control" name="nama" placeholder="nama" value="{{ $daftarmakanan->nama}}">
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
        <label for="deskripsi" class="control-label">Content</label>
        <textarea name="deskripsi" cols="30" rows="5" class="form-control">{{ $daftarmakanan->deskripsi }}</textarea>
        @if ($errors->has('deskripsi'))
            <span class="help-block">{{ $errors->first('deskripsi') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('daftarmakanan.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection