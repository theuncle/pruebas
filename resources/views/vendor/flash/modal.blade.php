<div id="flash-overlay-modal" class="modal fade {{ $modalClass or '' }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h2 class="modal-title text-center">{{ $title }}</h2>
            </div>

            <div class="modal-body text-center">
                <p>{!! $body !!}</p>
            </div>

            <div class="modal-footer ">
                <button type="button" class="btn btn-highlight btn-md center-block" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
