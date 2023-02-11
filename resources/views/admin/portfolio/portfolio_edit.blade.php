@extends('admin.admin_master')

@section('admin')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Portfolio Edit Page</h4>

                            <form action="{{ route('update.portfolio') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{  $portfolio->id }}">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="portfolio_name"
                                            id="example-text-input" value="{{ $portfolio->portfolio_name }}">
                                            @error('portfolio_name')
                                            <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="portfolio_title"  id="example-text-input" value="{{ $portfolio->portfolio_title }}">
                                        @error('portfolio_title')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Description</label>
                                    <div class="col-sm-10">
                                       <textarea name="portfolio_description" class="form-control" rows="5">{{ $portfolio->portfolio_description }}</textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                             

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="image" name="portfolio_image">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" src="{{ asset($portfolio->portfolio_image) }}" id="showImage">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Portfolio Data">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});
</script>
@endsection
