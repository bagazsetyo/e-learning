@extends('layouts.admin')

@section('title', 'Rumus')

@section('content')


<x-breadcrumb :breadcrumb="$breadcrumb" />
<div class="page-content">
    <section id="input-style">
        {!! $rumus->input !!}
    </section>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <h5 class="text-uppercase">Rumus : {{ $rumus->judul }}</h5>
                </div>
                <form action="{{ route('belajar.rumus.updatecatatan', $rumus->id) }}" method="post">
                    @csrf
                    <textarea name="contoh" id="default" cols="30" rows="10"></textarea>
                    <button class="btn btn-primary mt-3">Ubah Catatan</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@push('after-scripts')
<script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: '#default',
        plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'table emoticons template paste help'
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
        menu: {
        favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: 'css/content.css',
        statusbar: false,
    });
</script>
<script>
    {!! $rumus->rumus !!}
</script>
@endpush
