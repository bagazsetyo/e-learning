@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<x-breadcrumb :breadcrumb="$breadcrumb" />
<div class="page-content">
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('admin.user.menu.create') }}" class="btn btn-primary">Tambah Menu</a>
                        </div>
                        <div class="col-12">
                            <ul class="list-group">
                                @foreach ($data as $menu)
                                    <li class="d-flex justify-content-between list-group-item @if($menu->status) list-group-item-light @else list-group-item-danger @endif">
                                        - {{ $menu->name }}
                                        <div class="d-flex">
                                            <a href="{{ route('admin.user.menu.edit', $menu->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </div>
                                    </li>
                                    @forelse ($menu->parent as $item)
                                        <li class="d-flex justify-content-between list-group-item @if($item->status) list-group-item-light @else list-group-item-danger @endif">
                                            &nbsp&nbsp&nbsp&nbsp&nbsp -- {{ $item->name }}
                                            <div class="d-flex">
                                                <a href="{{ route('admin.user.menu.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                        </li>
                                    @empty
                                        
                                    @endforelse
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('after-scripts')
<script>
    // var datatables = $('#menu').DataTable({
    //     processing: true,
    //     // dom: 'Bfrtip',
    //     serverside: true,
    //     scrollX: false,
    //     ordering: true,
    //     autoWidth: false,
    //     responsive: true,
    //     order: [[ 0, "desc" ]],
    //     ajax:{
    //         url : '{!! url()->current() !!}',
    //     },
    //     columns:[
    //         {data: 'id', name:'id' ,visible: false, searchable: false},
    //         {data: 'DT_RowIndex', name:'DT_RowIndex'},
    //         {data: 'name', name:'name'},
    //         {data: 'icon', name:'icon'},
    //         {data: 'url', name:'url'},
    //         {data: 'action', name:'action'},
    //     ],
    // });
</script>
@endpush
