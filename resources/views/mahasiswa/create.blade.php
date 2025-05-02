@extends('index')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">New Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="NPM" class="form-label">NPM</label>
            <input type="text" name="NPM" class="form-control" id="NPM" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="jurusan" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" id="kelas" required>
        </div>
        <div class="mb-3">
            <label for="tahunMasuk" class="form-label">Tahun Masuk</label>
            <input type="date" name="tahunMasuk" class="form-control" id="tahunMasuk" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
