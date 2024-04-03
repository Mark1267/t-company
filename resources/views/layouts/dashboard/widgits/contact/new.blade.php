<div class="col-md-6 col-12 text-end">
    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".ticket">
        <i class="mdi mdi-email-edit-outline"></i> Create New Ticket
    </button>
    <div class="modal fade bs-example-modal-center ticket" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('user.contact.save') }}">
                        <div class="row">
                            @csrf
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea id="emaileditor2" class="form-control" required name="message" placeholder="Message Here..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-5 mx-auto">
                                <button class="btn btn-block btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
