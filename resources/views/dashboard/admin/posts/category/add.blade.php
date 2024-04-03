@extends('layouts.dashboard.app', ['title' => 'Add a new Category'])
@section('css')
    <!--quill css-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/libs/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/libs/select2/css/select2.min.css') }}">
@endsection
@section('content')
                <div class="col-xl-8 col-lg-8 mx-auto col-md-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="">
                                <!-- end row -->
                                <h4 class="font-size-18 text-muted mt-1 text-center">Add new Category</h4>
                                <p class="mb-3 text-center">Add a new Category for Blog Post</p>
                                <form class="form-horizontal" method="POST" action="{{ route('admin.categories.add.save') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            <label for="type" class="col-md-12 col-form-label">Category Title</label>
                                            <input class="form-control" name="title" type="text" placeholder="Category Title..." value="{{ old('title') }}" id="title">
                                            @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="col-md-12 mb-1">
                                            <label for="type" class="col-md-12 col-form-label">Body of Category</label>
                                            <textarea class="form-control" name="body" id="email-editor" placeholder="Body of Category..." rows="3">{{ old('body') }}</textarea>
                                            @error('body')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="d-grid mt-4">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Add</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
@section('srcipts')
    
    <!--quill js-->
    <script src="{{ asset('assets/dashboard/libs/quill/quill.min.js') }}"></script>

    <!--tinymce js-->
    <script src="{{ asset('assets/dashboard/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets/dashboard/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/pages/form-editor.init.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/pages/form-advanced.init.js') }}"></script>

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
    </script>
@endsection