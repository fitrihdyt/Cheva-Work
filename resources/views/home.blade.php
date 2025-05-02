@extends('index')

@section('content')
<style>
    .full-height-center {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }
    .bg-title {
        background-color: #fdba31;
        color: white;
        padding: 20px 30px;
        border-radius: 10px;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>

<div class="container full-height-center">
    <div class="bg-title">
        <h1>Selamat Datang di Aplikasi Manajemen Mahasiswa</h1>
    </div>

    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary btn-lg">Lihat Data Mahasiswa</a>
</div>
@endsection
