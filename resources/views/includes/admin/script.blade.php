<script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>

<script src="{{ asset('assets/vendors/toastify/toastify.js') }}"></script>
{{-- <script src="{{ asset('assets/js/extensions/toastify.js') }}"></script> --}}

{{-- chooice js --}}
<script src="{{ asset('assets/vendors/choices.js/choices.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-element-select.js') }}"></script>

<script src="{{ asset('assets/js/mazer.js') }}"></script>


<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">PERHATIAN</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b id="konfirmasi-modal-title">Jika menghapus data</b></p>
                <p id="konfirmasi-modal-body">*data data tersebut akan hilang selamanya, apakah anda yakin?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" name="delete" id="delete">Hapus
                    Data</button>
            </div>
        </div>
    </div>
</div>

<div class="bs-example">
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#myModal").on('show.bs.modal', function(e){
            var button = $(e.relatedTarget);
            var modal = $(this);
            modal.find('.modal-body').load(button.data("remote"));
            modal.find('.modal-title').html(button.data("title")); 
        });
    });
});
</script>

<script>
    let sub = $('.has-sub').find('ul').each(function (index, el) {
        if($(el).find('li').length <= 0){
            $(el).parent().remove();
        }
    });

    function errorValidation(response){
        var error = response.responseJSON.errors;
        $.each(error, function(key, value){
            var input = $('input[name="'+key+'"]').parent();
            var error_message = `<div class="invalid-feedback"><i class="bx bx-radio-circle"></i>`+value+`</div>`;
    
            $('input[name="'+key+'"]').addClass('is-invalid');
    
            input.append(error_message);
        });
    }
</script>