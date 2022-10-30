@extends('layouts.admin')

@section('title','Role')

@section('content')
<x-breadcrumb :breadcrumb="$breadcrumb" />
<section>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">List Url</h4>
            <div class="mt-4">
                <h6>Note</h6>
                <div class="d-flex flex-column">
                    <div class="d-flex">
                        <div class="mr-3">
                            <i class="fa fa-circle text-info"></i>
                        </div>
                        <div style="margin-left: 10px;"></div>
                        <div class="pl-4">
                            <p class="mb-0 ml-4">
                                <strong class="ml-4"> GET / HEAD</strong>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mr-3">
                            <i class="fa fa-circle text-primary"></i>
                        </div>
                        <div style="margin-left: 10px;"></div>
                        <div class="pl-4">
                            <p class="mb-0 ml-4">
                                <strong class="ml-4"> POST</strong>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mr-3">
                            <i class="fa fa-circle text-warning"></i>
                        </div>
                        <div style="margin-left: 10px;"></div>
                        <div class="pl-4">
                            <p class="mb-0 ml-4">
                                <strong class="ml-4"> PUT</strong>
                            </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mr-3">
                            <i class="fa fa-circle text-danger"></i>
                        </div>
                        <div style="margin-left: 10px;"></div>
                        <div class="pl-4">
                            <p class="mb-0 ml-4">
                                <strong class="ml-4"> DELETE</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-content">
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @php 
                                $map = [
                                    0 => 'message',
                                    1 => 'controller'
                                ]
                            @endphp
                            @foreach($errors->all() as $index => $error)
                                <li>
                                    {{ $map[$index] ?? '' }} : {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form" method="post" action="{{ route('admin.user.url.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <button id="check-all" type="button" class="btn btn-primary"> check all</button>
                        </div>
                        @foreach ($routes as $key => $route)
                            <div class="col-3 form-group">
                                <label for="">{{ $key }}</label>
                                @foreach ($route as $id => $url)
                                    <div class='form-check'>
                                        <div class="checkbox">
                                            @php 
                                                $name_checkbox = 'url['.$url['full_controller'].']['.$url['name_controller'].']['.$url['url'].']['.$url['method'][0].']';
                                            @endphp
                                            <input type="hidden" value="0" name="{{ $name_checkbox }}" >
                                            <input type="checkbox" name="{{ $name_checkbox }}" class='form-check-input' @checked($url['status']) id="{{ $key.$id }}">
                                            <label
                                                for="{{ $key.$id }}"
                                                class="
                                                    @if(in_array($url['method'][0], ['GET', 'HEAD']))
                                                        text-info
                                                    @elseif(in_array($url['method'][0], ['POST']))
                                                        text-primary
                                                    @elseif(in_array($url['method'][0], ['PUT', 'PATCH']))
                                                        text-warning
                                                    @elseif(in_array($url['method'][0], ['DELETE']))
                                                        text-danger
                                                    @endif
                                                ">
                                                {{ $url['url'] }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <button class="btn btn-primary mt-5">Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('after-scripts')
<script>
    $('#check-all').click(function (event) {
        $('.form-check-input').each(function (index, el) {
            el.checked = true;
        });
    });    
</script>    
@endpush