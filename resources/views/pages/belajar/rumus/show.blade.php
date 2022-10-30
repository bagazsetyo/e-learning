@extends('layouts.admin')

@section('title', 'Rumus')

@section('content')


<x-breadcrumb :breadcrumb="$breadcrumb" />
<div class="page-content">
    <section>
        <div class="card">
            <div class="card-body">
                {!! $rumus->contoh !!}
            </div>
        </div>
    </section>
    <section id="input-style">
        {!! $rumus->input !!}
    </section>
</div>
@endsection

@push('after-scripts')
<script>
    {!! $rumus->rumus !!}
</script>
@endpush
