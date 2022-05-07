@extends('admin.master')
@section('content')

    <h3 class="mb-4">About</h3>

    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

@if(session()->has('message'))
    <p class="alert alert-message">{{session()->get('message')}}</p>
@endif

    <a href="{{ route('about.create') }}" class="btn btn-primary float-end"><i class="fa fa-plus"></i>Add About</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover" width= "100%">
        <thead>
            <tr>
                <th width="5%" scope="col">#</th>
                <th width="25%" scope="col">Image</th>
                <th width="50%" scope="col">Description</th>
                <th width="20%" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $key => $about)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td><img src="{{ Storage::url($about->image)}}" width="80"></td>
                    <td>{{ $about->description }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('about.edit', $about->id) }}">Edit</a> <br>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')" href="{{ route('about.delete', $about->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
