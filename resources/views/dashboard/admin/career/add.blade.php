@extends('layouts.dashboard.app', ['title' => 'Add Career'])
@section('css')
    <!--quill css-->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/libs/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/libs/select2/css/select2.min.css') }}">
@endsection
@section('content')
    
<div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Career</h4>
    
                    <div class="pe-3" data-simplebar>
                        <form action="{{ route('admin.career.add.save') }}" method="POST">
                            <div class="row">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Career Title*" value="{{ old('title') }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="mode" class="col-md-12 col-form-label">Mode of Employment</label>
                                        <select name="mode" class="form-select">
                                            <option>Select</option>
                                            @foreach ($modes as $mode)
                                                <option @if (old('mode') == $mode) selected @endif value="{{ $mode }}">{{ $mode }}</option>
                                            @endforeach
                                        </select>
                                        @error('mode')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="min">Min. Salary</label>
                                        <input type="number" class="form-control" name="min" id="min" placeholder="Career Min. Salary*" value="{{ old('min') }}">
                                        @error('min')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="max">Max. Salary</label>
                                        <input type="number" class="form-control" name="max" id="max" placeholder="Career Max. Salary*" value="{{ old('max') }}">
                                        @error('max')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="fee">Aplication Fee</label>
                                        <input type="text" class="form-control" name="fee" id="fee" placeholder="Career Applocation Fee*" value="{{ old('fee') }}">
                                        @error('fee')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-12 mb-1">
                                    <label for="type" class="col-md-12 col-form-label">Job Description</label>
                                    <textarea class="form-control" name="description" id="elm2" placeholder="Job Description..." rows="3">{{ old('description') }}</textarea>
                                    @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-center mx-auto col-12">
                                    <button type="submit" class="btn btn-primary" type="submit">Add Job</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
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