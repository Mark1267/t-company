@extends('layouts.dashboard.app', ['title' => 'Reply ' . $ticket->ref])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h4 class="card-title mb-4">{{ 'Reply ' . $ticket->ref }}</h4>
                    </div>
                    <div class="col-12">
                    <form method="POST" action="{{ route('admin.contact.reply.save') }}">
                                    @csrf        <div class="row">
                                        <input type="hidden" name="user_contact_id" value="{{ $ticket->id }}">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Email">Email</label>
                                                        <input type="email" readonly class="form-control" name="email" id="email" placeholder="Email" value="{{ $ticket->user->email }}" required>
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
                                                        <textarea id="email-editor" name="message" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 text-center mx-auto">
                                                    <button id="" class="btn btn-primary" type="submit">Reply User</button>
                                                </div>
                                            </div>
                                        </form>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('srcipts')

    <!--tinymce js-->
    <script src="{{ asset('assets/') }}/dashboard/libs/tinymce/tinymce.min.js"></script>

    <script>
        $(document).ready(function() {
    0 < $("#email-editor ").length &&
        tinymce.init({
            selector: "textarea#email-editor",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor",
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                { title: "Bold text", inline: "b" },
                { title: "Red text", inline: "span", styles: { color: "#ff0000" } },
                { title: "Red header", block: "h1", styles: { color: "#ff0000" } },
                { title: "Example 1", inline: "span", classes: "example1" },
                { title: "Example 2", inline: "span", classes: "example2" },
                { title: "Table styles" },
                { title: "Table row 1", selector: "tr", classes: "tablerow1" },
            ],
        });
});

$(document).ready(function() {
    0 < $("#email-editor2").length &&
        tinymce.init({
            selector: "textarea#email-editor2",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor",
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                { title: "Bold text", inline: "b" },
                { title: "Red text", inline: "span", styles: { color: "#ff0000" } },
                { title: "Red header", block: "h1", styles: { color: "#ff0000" } },
                { title: "Example 1", inline: "span", classes: "example1" },
                { title: "Example 2", inline: "span", classes: "example2" },
                { title: "Table styles" },
                { title: "Table row 1", selector: "tr", classes: "tablerow1" },
            ],
        });
});
    </script>

@endsection