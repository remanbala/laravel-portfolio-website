@extends('admin.admin_master')

@section('admin')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Add Skill Images</h4>

                            <form action="{{ route('store.skillImages') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                               
                              
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Skill Images</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="image" name="skillImages[]" multiple="">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img class="rounded avatar-lg" src="{{ url('uploads/no_image.jpg') }}" id="showImage">
                                    </div>
                                </div>
                                <!-- end row -->

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Skill Images">
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
