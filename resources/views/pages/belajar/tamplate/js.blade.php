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
                <form action="{{ route('belajar.template.store') }}" class="mt-3" method="post">
                    @csrf
                    <div class="col-12">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-select" name="status" required>
                                <option value="1" @selected(old('status') === 1)>Aktif</option>
                                <option value="0" @selected(old('status') === 0)>Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                    
                    <div id="editor" class="mt-4" style="height: 50vh;">{{ old('kode') }}</div>
                    <input type="hidden" name="tipe" value="js">
                    <textarea name="kode" class="d-none">{{ old('kode') }}</textarea>
                    <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
                    <button type="button" id="generate-script" class="btn btn-primary">Generate</button>

                    <div id="tampilan">

                    </div>

                    <div id="hasil">

                    </div>
                    
                </form>
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
        $('textarea[name="kode"]').val(editor.getValue());
    })
</script>
@endpush
