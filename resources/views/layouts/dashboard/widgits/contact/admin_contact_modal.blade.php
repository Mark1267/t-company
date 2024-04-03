<div class="modal fade bs-example-modal-center{{ $ticket->ref }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ticket {{ $ticket->ref }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="d-flex mb-4">
                                    <div class="flex-grow-1">
                                        <h4 class="font-size-16">{{ $ticket->user->full_name }}</h4>
                                        <p class="text-muted font-size-13">{{ $ticket->user->email }}</p>
                                    </div>
                                </div>
                                <h4 class="font-size-16">{{ $ticket->subject }}</h4>
                                {!! $ticket->message !!}
                                <hr/>
                                <a class="btn btn-primary btn-sm"  href="{{ route('admin.contact.reply', ['ticket_ref' => $ticket->ref]) }}">Reply</a>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade bs-example-modal-centerdel{{ $ticket->ref }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ticket {{ $ticket->ref }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-0">
                            <div class="card-body text-center">
                                <p>Are sure you want to delete Ticket {{ $ticket->ref }}?</p>
                                <a href="{{ route('admin.contact.delete', ['ticket_ref' => $ticket->ref]) }}" class="btn btn-danger">Yes</a>
                            </div>
                        </div>
                        <!-- end card -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->