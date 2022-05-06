@extends('admin.master')

@section('content')

<div class="col-12">
    <h3 class="mb-4">Edit</h3>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                <p class="alert alert-danger">{{ $error }}</p>
            </div>
        @endforeach
    @endif
</div>

    <div class="col-12">
        <div class="card shadow position-relative">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Informations</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Logo Text</label>
                                <input value="{{ $setting->logo_text }}" name="logo_text" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Banner Text</label>
                                <input value="{{ $setting->banner_text }}" name="banner_text" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                <input value="{{ $setting->address }}"  name="address" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                                <input value="{{ $setting->mbl_num }}"  name="mbl_num" type="number" class="form-control">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alternative Number</label>
                                <input value="{{ $setting->alt_num }}"  name="alt_num" type="number" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">FB Link</label>
                                <input value="{{  $setting->fb_link }}"  name="fb_link" type="text"  class="form-control">

                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Footer Text</label>
                                <input value="{{ $setting->footer_text  }}"  name="footer_text" type="text"  class="form-control">

                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Location</label>
                                <input value="{{ $setting->location }}"  name="location" type="text"  class="form-control">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input value="{{ $setting->email }}"  name="email" type="text"  class="form-control">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Footer Number</label>
                                <input value="{{ $setting->footer_num }}" name="footer_num" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <img id="output" height="30" width="50" src="" />
                                <label for="exampleInputEmail1" class="form-label">Logo Image</label>
                                <input  name="image" type="file" id="image" class="form-control" onchange="loadFile(event)">
                                <img src="{{ Storage::url($setting->image)}}" width="80">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Submit</span>
                    </button>
                    <a href="{{ route('setting.index') }}" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                        </span>
                        <span class="text">Cancel</span>
                    </a>
                </form>
            </div>
        </div>
    </div>

@endsection

<script>
var loadFile = function(event){
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
};
</script>
