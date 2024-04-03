<div class="col-6 text-end">

    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".ticket">Create New Ticket</button>
    <!-- <a href="" class="btn pull-right btn-success">Create New Ticket</a> -->
    <div class="modal fade bs-example-modal-center ticket" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Users</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                    <form method="POST" action="{{ route('admin.contact.new.save') }}">
                        <div class="row">
                            @csrf
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Select User</label>
                                    <select class="form-select" id="users_id" name="users_id" required>
                                        <option></option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea name="message" id="email-editor" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-5 text-center mx-auto">
                                <button class="btn btn-primary" type="submit">Contact User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>