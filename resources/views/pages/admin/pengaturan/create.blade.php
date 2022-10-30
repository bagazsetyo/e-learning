<div>
    <form method="post" id="create_mata_pelajaran">
        @csrf
        <div class="form-group">
            <label for="">Nama</label>
            <input type="name" class="form-control" name="nama" id="nama" placeholder="Budi">
        </div>
        <div class="form-group">
            <label for="">Nama</label>
            <select name="tipe_data" class="choices form-select" id="">
                @foreach($tipe_data as $key => $value)
                <option value="{{ $key }}">{{ $value['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Nilai</label>
            <textarea class="form-control" name="nilai" placeholder="example"></textarea>
            <div class="text-muted" >Note: <a id="deskripsi_nilai"></a></div>
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <textarea class="form-control" name="keterangan" placeholder="example"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
        </div>
    </form>
</div>

<script>
    var array_tipe = {!! json_encode($tipe_data) !!};
    $('.choices').on('change', function(){
        var value = $(this).val();
        var tipe = array_tipe[value];
        $('#deskripsi_nilai').html(tipe['keterangan']);
    })

    $('#create_mata_pelajaran').submit(function(e) {
        e.preventDefault();
        var actionType = $('#simpan').val();
        document.getElementById("simpan").disabled = true;
        $('#simpan').html('Menyimpan...');
        let formData = new FormData(this);
        $.ajax({
            type:'POST',
            url: '{{ route('admin.pengaturan.store') }}',
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    datatables.ajax.url('{!! route('admin.pengaturan.index') !!}').load();
                    document.getElementById("simpan").disabled = false;
                    $('#simpan').html('Simpan');

                    $(this).find('input').removeClass('is-invalid');

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
                errorValidation(response);
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