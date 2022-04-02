@extends('admin.master')
@section('content')

    <h3 class="mb-4">Gallery</h3>

    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif 

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif 

@if(session()->has('message'))
    <p class="alert alert-message">{{session()->get('message')}}</p>
@endif 

    <a href="{{ route('gallery.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Add Gallery</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th> 
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $key => $gallery)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $gallery->name }}</td>
                    <td>{{ $gallery->category }}</td>
                    <td><img src="{{ Storage::url($gallery->image)}}" width="80"></td>
                    {{-- <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.details', $gallery->id) }}">Details</i></a>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.edit', $gallery->id) }}">Edit</a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')" href="{{ route('admin.delete', $gallery->id) }}">Delete</a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $galleries->links() }}

@endsection