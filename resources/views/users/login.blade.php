@extends('users.layout')

@section('content')
    <div class="bg-light rounded p-5">
        <h2 class="text-center mb-5">Bejelentkezés</h2>
        <form method="POST" action="{{ route('authenticate') }}">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Felhasználónév</label>
                <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}">
                @error('username')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Jelszó</label>
                <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Bejelentkezés</button>
        </form>
    </div>
@endsection