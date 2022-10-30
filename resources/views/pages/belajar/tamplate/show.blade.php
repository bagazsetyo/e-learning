@extends('layouts.admin')

@section('title', 'Rumus')

@section('content')


<x-breadcrumb :breadcrumb="$breadcrumb" />
<div class="page-content">
    <section id="input-style">
        {!! $data->kode !!}
    </section>
</div>
@endsection