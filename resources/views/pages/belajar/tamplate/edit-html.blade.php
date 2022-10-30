@extends('layouts.admin')

@section('title', 'Rumus')

@push('after-styles')
<link rel="stylesheet" href="{{ asset('assets/code-editor-js-theme/codemirror.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/code-editor-js-theme/monokai.min.css')}}">
@endpush

@section('content')


<x-breadcrumb :breadcrumb="$breadcrumb" />
<div class="page-content">
    <section id="input-style">
        <div class="row">
            <form action="{{ route('belajar.template.update', $data->id) }}" method="post">
                @method('PUT')
                @csrf
                <input type="hidden" name="tipe" value="html">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" value="{{ $data->judul }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-select" name="status" required>
                                    <option value="1" @selected($data->status == 1)>Aktif</option>
                                    <option value="0" @selected($data->status == 0)>Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="title text-center border-bottom">HTML Editor</h2>
                                    <textarea id="code-editor" name="kode" style="min-height: 50vh;">{!! $data->kode !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="title text-center border-bottom">Preview</h2>
                                    <iframe id="preview-frame" class="bg-secondary" width="100%" style="min-height: 50vh;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

@push('after-scripts')
<script src="{{ asset('assets/code-editor-js-theme/codemirror.min.js')}}"></script>
<script src="{{ asset('assets/code-editor-js-theme/xml.min.js')}}"></script>
<script src="{{ asset('assets/code-editor-js-theme/javascript.min.js')}}"></script>
<script src="{{ asset('assets/code-editor-js-theme/css.min.js')}}"></script>
<script src="{{ asset('assets/code-editor-js-theme/htmlmixed.min.js')}}"></script>
<script>
    var $ = function(el) {
        return document.querySelector(el);
    };
    
    function updatePreview(html)
    {
        var html_tamplate = '<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">'
        html_tamplate += html; 

        $('#preview-frame').contentWindow.document.open();
        $('#preview-frame').contentWindow.document.write(html_tamplate);
        $('#preview-frame').contentWindow.document.close();
    }
    
    window.addEventListener('beforeunload', function(e)
    {
      if (e) {
        // Cancel the event
        e.preventDefault();
        // Chrome requires returnValue to be set
        e.returnValue = '';
      }
    
      return 'Are you sure want to exit?';
    });
    
    window.addEventListener('DOMContentLoaded', function(e) {
      cm = CodeMirror.fromTextArea($('#code-editor'), {
          lineNumbers: true,
          styleActiveLine: true,
          mode: 'text/html',
          theme: 'monokai',
      });
 
      cm.on('change', function() {
          updatePreview(cm.getValue());
      });

      cm.setSize('100%', '50vh');
    
      updatePreview(cm.getValue());
    });
</script>
@endpush
