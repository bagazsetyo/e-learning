@extends('layouts.admin')

@section('title', 'Rumus')

@push('after-styles')
<style type="text/css" media="screen">
    #editor { 
        height: 20vh;
    }
</style>
@endpush

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

    <section>
        <div class="card">
            <div class="card-body">
                
                <div id="editor" style="height: 50vh;">{!! $rumus->rumus !!}</div>

                
                <form action="{{ route('belajar.rumus.updatescript', $rumus->id) }}" class="mt-3" method="post">
                    @csrf
                    <textarea name="rumus" class="d-none"></textarea>
                    <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
                    <button type="button" id="generate-script" class="btn btn-primary">Generate</button>
                </form>

                <div id="tampilan">

                </div>

                <div id="hasil">

                </div>
            </div>
        </div>
    </section>

</div>
@endsection

@push('after-scripts')

{{-- <script src="{{ asset('assets/code-editor-ace/ace.js') }}" type="text/javascript" charset="utf-8"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.5.0/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/javascript");

    $('#generate-script').on('click', function(e){
        Toastify({
            text: "Script berhasil digenerate",
            duration: 3000,
            gravity: "top",
            position: "right",
            className: "bg-success"
        })
        .showToast();
        eval(editor.getValue());
    })

    // set textarea name script to value of editor
    $('#simpan').on('click', function(e){
        $('textarea[name="rumus"]').val(editor.getValue());
    })
</script>
@endpush
