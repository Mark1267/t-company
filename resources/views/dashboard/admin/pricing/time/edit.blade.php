@extends('layouts.dashboard.app', ['title' => 'Update Plan Timing'])

@section('content')
    
<div class="row">
    <div class="col-xl-10 mx-auto">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Plan time</h4>
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
                        <form action="{{ route('admin.pricing.time.update.save', ['id' => $time->id]) }}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="suffix">Suffix</label>
                                        <input type="text" class="form-control" id="suffix" name="suffix" placeholder="Plan suffix*" value="{{ old('suffix') ?? $time->suffix }}">
                                        <small class="text-info">Eg. Week(s), Day(s), Year(s)</small>
                                        @error('suffix')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="hours">Hours</label>
                                        <input type="text" class="form-control" id="hours" name="hours" placeholder="Plan hours*" value="{{ old('hours') ?? $time->hours }}">
                                        <small class="text-info">Eg. For 1 Week = (24hours X 7Days)</small>
                                        @error('hours')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                    <div class="col-md-6 text-center mx-auto col-12">
                                        <button type="submit" class="btn btn-primary" type="submit">Update Plan time</button>
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