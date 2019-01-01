@extends('layouts.app')

@section('content')
    <a href="{{ route('daftarmakanan.create') }}" class="btn btn-info btn-sm">Makanan</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
        </thead>
        <tbody>
            @foreach ($daftarmakanans as $daftarmakanan)
                <tr>
                    <td>{{ $daftarmakanan->id }}</td>
                    <td><a href="{{ route('daftarmakanan.show', $daftarmakanan->id) }}">{{ $daftarmakanan->nama }}</a></td>
                    <td>
                        <form action="{{ route('daftarmakanan.destroy', $daftarmakanan->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('daftarmakanan.edit', $daftarmakanan->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection