@extends('layouts.admin')

@section('title', 'Mata Pelajaran')

@section('content')


<x-breadcrumb :breadcrumb="$breadcrumb" />
<div class="page-content">
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-5">
                            <a href="#"
                                type="button"
                                class="btn btn-primary my-2"
                                data-bs-toggle="modal"
                                data-title="Tambah Mata Pelajaran"
                                data-bs-target="#myModal"
                                data-remote="{{route('belajar.mapel.create')}}">
                                Tambah Mata Pelajaran
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="Mapel">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th>id</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">id</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Name</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Action</th>
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
    var datatables = $('#Mapel').DataTable({
        processing: true,
        // dom: 'Bfrtip',
        serverside: true,
        scrollX: false,
        ordering: true,
        autoWidth: false,
        order: [[ 0, "desc" ]],
        ajax:{
            url : '{!! url()->current() !!}',
        },
        columns:[
            {data: 'id', name:'id' ,visible: false, searchable: false},
            {data: 'DT_RowIndex', name:'DT_RowIndex'},
            {data: 'nama_mapel' , name: 'nama_mapel'},
            {data: 'action' , name: 'action', width: '15%', searchable:false, orderable:false},
        ],
    });
    $('#create_mata_pelajaran').submit(function(e) {
        e.preventDefault();
        var actionType = $('#simpan').val();
        document.getElementById("simpan").disabled = true;
        $('#simpan').html('Menyimpan...');
        let formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '{{ route('belajar.mapel.store') }}',
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    datatables.ajax.url('{!! url()->current() !!}').load();
                    document.getElementById("simpan").disabled = false;
                    $('#simpan').html('Simpan');

                    Toastify({
                        text: "Data Berhasil Ditambah",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        className: "bg-success"
                    })
                    .showToast();
                }
            },
            error: function(response){
                document.getElementById("simpan").disabled = false;
                $('#simpan').html('Simpan');
                Toastify({
                    text: "Data gagal Ditambah",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    className: "bg-danger"
                })
                .showToast();
            }
        });
    });
    $(document).on('click', '.edit', function () {
        dataId = $(this).attr('id');
        id = dataId;
        $('#nama').val($(this).data('nama'));
    });

    $(document).on('click', '.delete', function () {
        dataId = $(this).attr('id');
        $('#konfirmasi-modal').modal('show');
        $('#konfirmasi-modal-title').html('Apakah anda yakin ingin menghapus data ini?');
        $('#konfirmasi-modal-body').html('<p>Data yang dihapus tidak dapat dikembalikan.</p>');
    });

    $('#delete').click(function () {
        $.ajax({
            url: "{{ url('/belajar/mapel') }}/" + dataId, //eksekusi ajax ke url ini
            type: 'delete',
            beforeSend: function () {
                $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
            },
            success: function (data) { //jika sukses
                datatables.ajax.url('{!! url()->current() !!}').load();
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide');
                    var oTable = $('#frame').dataTable();
                    oTable.fnDraw(true); //reset datatable
                });
                Toastify({
                    text: "Data Berhasil Dihapus",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    className: "bg-success"
                })
                .showToast();
            }
        })
    });
</script>
@endpush
