@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="email" type="email" value="bagas@gmail.com" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
    </div>
    @error('email')
            <strong class="text-danger">{{ $message }}</strong>
    @enderror
    <div class="form-group position-relative has-icon-left mb-4">
        <input id="password" type="password" value="password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
    </div>
    @error('password')
            <strong class="text-danger">{{ $message }}</strong>
    @enderror
    <div class="form-check form-check-lg d-flex align-items-end">
        <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>
    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
</form>
@endsection
