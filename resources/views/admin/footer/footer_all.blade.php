@extends('admin.admin_master')

@section('admin')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Footer Page</h4>

                            <form action="{{ route('footer.update') }}" method="POST"">
                                @csrf
                                <input type="hidden" name="id" value="{{ $footerPage->id }}">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="number" value="{{ $footerPage->number }}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="short_description" value="{{ $footerPage->short_description }}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="address" value="{{ $footerPage->address }}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" name="email" value="{{ $footerPage->email }}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="facebook" value="{{ $footerPage->facebook }}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Twitter</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="twitter" value="{{ $footerPage->twitter }}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Copyright</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="copyright" value="{{ $footerPage->copyright }}" id="example-text-input">
                                    </div>
                                </div>
                                <!-- end row -->

                                {{-- <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                    <div class="col-sm-10">
                                       <textarea required="" name="short_description" class="form-control" rows="5">{{ $aboutPage->short_description }}</textarea>
                                    </div>
                                </div> --}}
                                <!-- end row -->


                               

                                

                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Footer Page">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
