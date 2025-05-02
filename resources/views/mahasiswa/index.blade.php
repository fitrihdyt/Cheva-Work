@extends('index')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">All Mahasiswa</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Tahun Masuk</th>
                    @if(auth()->user()->role === 'admin')
                    <th>Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->NPM }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->jurusan }}</td>
                        <td>{{ $mahasiswa->kelas }}</td>
                        <td>{{ $mahasiswa->tahunMasuk }}</td>
                        @if(auth()->user()->role === 'admin')
                            <td>
                                <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if(auth()->user()->role === 'admin')
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mt-3">New Mahasiswa</a>
    @endif
</div>
@endsection
