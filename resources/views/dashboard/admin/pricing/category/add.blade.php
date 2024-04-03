@extends('layouts.dashboard.app', ['title' => 'Add Plan'])

@section('content')
    
<div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Plan Category</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="pe-3" data-simplebar>
                        <form action="{{ route('admin.pricing.category.add.save') }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Category Title:</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Plan Category Title*" value="{{ old('title') }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="type" class="col-md-12 col-form-label">Body of Category</label>
                                    <textarea class="form-control" name="body" id="elm2" placeholder="Body of Category..." rows="3">{{ old('body') }}</textarea>
                                    @error('body')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                {{-- <div class="col-md-12">
                                    <div class="mb-3">
                                        <input type="checkbox" class="form-check-inline checkbox" id="type" name="type">
                                        <label class="form-label text-dark" for="type">Compound</label>
                                    </div>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <div class="col-md-6 text-center mx-auto col-12">
                                    <button type="submit" class="btn btn-primary" type="submit">Add Plan Category</button>
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