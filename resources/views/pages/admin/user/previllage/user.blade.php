<div>
    <form method="post" id="create_mata_pelajaran">
        @csrf
        <div class="form-group">
            <label for="">Nama User</label>
            <input type="name" class="form-control" name="name" id="name" placeholder="Budi">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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
            url: '{{ route('admin.user.previllage.user.create') }}',
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response) {
                    this.reset();
                    datatables.ajax.url('{!! route('admin.user.previllage.index') !!}').load();
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