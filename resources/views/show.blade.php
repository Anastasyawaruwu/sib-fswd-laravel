<!-- resources/views/users/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Pengguna</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                <!-- Tambahkan field lain sesuai kebutuhan -->
            </div>
        </div>

        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
