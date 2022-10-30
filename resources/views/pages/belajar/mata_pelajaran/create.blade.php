<div>
    <form method="post" id="create_mata_pelajaran">
        @csrf
        <div class="form-group">
            <label for="">Kode Mata Pelajaran</label>
            <input type="text" class="form-control" name="kode_mapel" id="nama_mapel" placeholder="Kode Mata Pelajaran">
        </div>
        <div class="form-group">
            <label for="">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" placeholder="Nama Mata Pelajaran">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
        </div>
    </form>
</div>

<script>
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
                    datatables.ajax.url('{!! route('belajar.mapel.index') !!}').load();
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
</script>