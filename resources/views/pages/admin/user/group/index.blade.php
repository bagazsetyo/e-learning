@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="page-heading">
    <h3>Group Menu</h3>
</div>
<div class="page-content">
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Group</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.user.group.store') }}" method="post" id="createGroup">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nama">Nama Group</label>
                                        <input type="text" id="nama" name="nama" class="form-control round"
                                            placeholder="Admin">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" id="simpan">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="tags">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th>id</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">id</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Name</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Actionss</th>
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
        order: [[ 0, "desc" ]],
        ajax:{
            url : '{!! url()->current() !!}',
        },
        columns:[
            {data: 'id', name:'id' ,visible: false, searchable: false},
            {data: 'DT_RowIndex', name:'DT_RowIndex'},
            {data: 'nama' , name: 'nama'},
            {data: 'action' , name: 'action', width: '15%', searchable:false, orderable:false},
        ],
    });

    $('#createGroup').submit(function(e) {
        e.preventDefault();
        var actionType = $('#simpan').val();
        document.getElementById("simpan").disabled = true;
        $('#simpan').html('Menyimpan...');
        let formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '{{ route('admin.user.group.store') }}?id='+id,
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
                    text: "Data Berhasil Ditambah",
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
            url: "{{ url('/admin/user/group') }}/" + dataId, //eksekusi ajax ke url ini
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
