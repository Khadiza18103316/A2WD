@extends('admin.master')

@section('content')

<div class="col-12">
    <h3 class="mb-4">Edit Teammates</h3>
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
                <h6 class="m-0 font-weight-bold text-primary">Teammates Informations</h6>
            </div> 
            <div class="card-body">

                <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input value="{{ $team->name }}" required name="name" type="text" placeholder="Name" class="form-control">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Id</label>
                                <input value="{{ $team->member_id }}" required name="member_id" type="number" placeholder="Id" class="form-control">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone</label>
                                <input value="{{ $team->phone }}" required name="phone" type="number" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Designation</label>
                                <input value="{{ $team->designation }}" required name="designation" type="text" placeholder="Designation" class="form-control">

                            </div>
                        </div>
                       
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <img id="output" src="" />
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input required name="image" type="file" id="image" class="form-control" onchange="loadFile(event)">
                                <img src="{{ Storage::url($team->image)}}" width="80">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Submit</span>
                    </button>
                    <a href="{{ route('team.index') }}" class="btn btn-danger btn-icon-split">
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