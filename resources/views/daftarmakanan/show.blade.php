@extends('layouts.app')

@section('content')
<h4>{{ $daftarmakanan->nama }}</h4>
<p>{{ $daftarmakanan->deskripsi }}</p>
<a href="{{ route('daftarmakanan.index') }}" class="btn btn-default">Kembali</a>
@endsection