@extends('layouts.dashboard.app', ['title' => 'Edit a Mail Temlate'])

@section('content')
<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-body">

                <form method="POST" action="{{ route('admin.mail.edit.save') }}">
                    @csrf
                    <input type="hidden" name="template_id" value="{{ $template->id }}">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="subject">Subject</label>
                                                                <input type="text" class="form-control" value="{{ old('subject') ?? $template->subject }}" id="subject" name="subject" placeholder="Subject" required>
                                                                @error('subject')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="message">Message</label>
                                                                <textarea id="email-editor" name="message" placeholder="Message">{{ old('message') ?? $template->message }}</textarea>
                                                                @error('message')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-center mx-auto col-12">
                                                            <button class="btn btn-primary" type="submit">Update Template</button>
                                                        </div>
                                                    </div>
                </form>
            
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h1>Description Lists</h1>    
                <p>Key and Value Pairs:</p>
                <dl>
                    @foreach($user as $key => $value)
                        <dt>#{{ $key }}#</dt>
                        <dd class="text-lowercase">{{ ucwords($key) }}</dd>
                    @endforeach
                </dl>
            </div>
        </div>
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