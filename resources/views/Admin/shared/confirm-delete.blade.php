<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{{ translate('Confirm Delete') }}</h4>
            </div>

            <div class="modal-body">
                <strong>Are you sure want to delete?</strong>
                <p>Do you want to proceed?</p>
                <p class="debug-url"></p>
            </div>

            <div class="modal-footer">
                {!!Form::open(['method'=>'DELETE','url'=>'', 'class'=>'btn-ok'])!!}
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ translate('Cancel') }}</button>
                    <button type="submit" class="btn btn-danger">{{ translate('Delete') }}</button>
                {!!Form::close()!!}
                <!-- <a class="btn btn-danger btn-ok">Delete</a> -->
            </div>
        </div>
    </div>
</div>

<script>
    $('#confirm-delete').on('show.bs.modal', function (e) {
       $(this).find('.btn-ok').attr('action', $(e.relatedTarget).data('href'));
    });
</script>