@extends('layouts.dashboard.app', ['title' => 'Update Post'])
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
                                <h4 class="font-size-18 text-muted mt-1 text-center">Update Post</h4>
                                <p class="mb-3 text-center">Update a Post for Blog Post</p>
                                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('admin.posts.edit.save') }}">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="id" value="{{ $post->id }}">
                                        <div class="col-md-12 mb-1">
                                            <label for="image" class="col-md-12 col-form-label">Post Image</label>
                                            <input class="form-control" type="file" name="image" id="image">
                                            @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <label for="title" class="col-md-12 col-form-label">Post Title</label>
                                            <input class="form-control" name="title" type="text" placeholder="Post Title..." value="{{ empty(old('title')) ? $post->title : old('title') }}" id="title">
                                            @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="col-md-12 mb-1">
                                            <label for="sub_title" class="col-md-12 col-form-label">Sub Title</label>
                                            <input class="form-control" name="sub_title"  placeholder="Post Sub Title..." value="{{ old('sub_title') ?? $post->sub_title }}">
                                            @error('sub_title')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="col-md-12 mb-1">
                                            <label for="cat_id" class="col-md-12 col-form-label">Post Category</label>
                                                <select name="cat_id" class="form-select">
                                                    <option>Select</option>
                                                    @foreach ($categories as $category)
                                                        <option @if ((empty(old('cat_id')) ? $post->cat_id : old('cat_id')) == $category->id) selected @endif value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('cat_id')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="col-md-12 mb-1">
                                            <label for="type" class="col-md-12 col-form-label">Body of Post</label>
                                            <textarea class="form-control" name="body" id="elm2" placeholder="Body of Post..." rows="3">{{ empty(old('body')) ? $post->body : old('body') }}</textarea>
                                            @error('body')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="d-grid mt-4">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Update</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
@section('srcipts')
    <!--tinymce js-->
    <script src="{{ asset('assets/dashboard/libs/tinymce/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function() { 
            0 < $("#elm1").length && tinymce.init({ selector: "textarea#elm2", height: 300, plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"], toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", style_formats: [{ title: "Bold text", inline: "b" }, { title: "Red text", inline: "span", styles: { color: "#ff0000" } }, { title: "Red header", block: "h1", styles: { color: "#ff0000" } }, { title: "Example 1", inline: "span", classes: "example1" }, { title: "Example 2", inline: "span", classes: "example2" }, { title: "Table styles" }, { title: "Table row 1", selector: "tr", classes: "tablerow1" }] })
            0 < $("#elm2").length && tinymce.init({ selector: "textarea#elm2", height: 300, plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"], toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", style_formats: [{ title: "Bold text", inline: "b" }, { title: "Red text", inline: "span", styles: { color: "#ff0000" } }, { title: "Red header", block: "h1", styles: { color: "#ff0000" } }, { title: "Example 1", inline: "span", classes: "example1" }, { title: "Example 2", inline: "span", classes: "example2" }, { title: "Table styles" }, { title: "Table row 1", selector: "tr", classes: "tablerow1" }] })
        });
    </script>
@endsection