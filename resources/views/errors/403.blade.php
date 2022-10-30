@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
{{-- @section('message', __($exception->getMessage() ?: 'Forbidden')) --}}
@section('message')
    Anda tidak memiliki akses untuk halaman ini. <br>
    <a href="{{ url()->previous() }}">Kembali ke halaman sebelumnya</a>
@endsection
