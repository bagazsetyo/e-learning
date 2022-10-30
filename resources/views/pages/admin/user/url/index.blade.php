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
                            <a href="{{ route('admin.user.url.create') }}" class="btn btn-primary">Autocreate Item</a>
                        </div>
                        <div class="row table-responsive">
                            <table class="table table-hover" id="tags">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th>id</th>
                                    <th>id</th>
                                    <th>Method</th>
                                    <th>Url</th>
                                    <th>Controller</th>
                                    <th>Path</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                </tbody>
                            </table>
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
    var id = '';
    var datatables = $('#tags').DataTable({
        processing: true,
        // dom: 'Bfrtip',
        serverside: true,
        scrollX: false,
        ordering: true,
        autoWidth: false,
        responsive: true,
        order: [[ 0, "desc" ]],
        ajax:{
            url : '{!! url()->current() !!}',
        },
        columns:[
            {data: 'id', name:'id' ,visible: false, searchable: false},
            {data: 'DT_RowIndex', name:'DT_RowIndex'},
            {data: 'method' , name: 'method'},
            {data: 'url' , name: 'url'},
            {data: 'nameController' , name: 'nameController'},
            {data: 'fullController' , name: 'fullController'},
        ],
    });

</script>
@endpush
