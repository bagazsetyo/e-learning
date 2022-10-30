<div>
    <form method="post" id="edit_mata_pelajaran">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Kode Mata Pelajaran</label>
            <input type="text" value="{{ $data->kode_mapel }}" class="form-control" name="kode_mapel" id="nama_mapel" placeholder="Kode Mata Pelajaran">
        </div>
        <div class="form-group">
            <label for="">Nama Mata Pelajaran</label>
            <input type="text" value="{{ $data->nama_mapel }}" class="form-control" name="nama_mapel" id="nama_mapel" placeholder="Nama Mata Pelajaran">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="Ubah">Ubah</button>
        </div>
    </form>
</div>

<script>
    $('#edit_mata_pelajaran').submit(function(e) {
        e.preventDefault();
        var actionType = $('#Ubah').val();
        document.getElementById("Ubah").disabled = true;
        $('#Ubah').html('Menyimpan...');
        let formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '{{ route('belajar.mapel.update', $data->id) }}',
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    datatables.ajax.url('{!! route('belajar.mapel.index') !!}').load();
                    document.getElementById("Ubah").disabled = false;
                    $('#Ubah').html('Ubah');

                    Toastify({
                        text: "Data Berhasil Diubah",
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        className: "bg-success"
                    })
                    .showToast();
                }
            },
            error: function(response){
                document.getElementById("Ubah").disabled = false;
                $('#Ubah').html('Ubah');
                Toastify({
                    text: "Data gagal Diubah",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    className: "bg-danger"
                })
                .showToast();
            }
        });
    });
</script>