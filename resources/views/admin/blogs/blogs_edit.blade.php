@extends('admin.admin_master')

@section('admin')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <style type="text/css">
            .bootstrap-tagsinput .tag{
                margin-right: 2px;
                color: #b70000;
                font-weight: 700px;
            } 
        </style>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Blog Page</h4>

                            <form action="{{ route('update.blog') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $blogs->id }}">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                                    <div class="col-sm-10">
                                       
                                        <select name="blog_category_id" class="form-select" aria-label="Default select example">
                                            <option selected="">Select Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $blogs->blog_category_id ? 'selected' : '' }}>{{ $category->blog_category }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="blog_title"
                                            id="example-text-input" value="{{ $blogs->blog_title }}">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog
                                        Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="blog_description" class="form-control" rows="5">{{ $blogs->blog_description }}</textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="blog_tags" value="{{ $blogs->blog_tags }}"
                                            data-role="tagsinput">
                                       
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="image" name="blog_image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" src="{{ asset($blogs->blog_image) }}"
                                            id="showImage">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Update Blog Data">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
