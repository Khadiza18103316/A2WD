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

    <a href="{{ route('gallery.create') }}" class="btn btn-primary float-end"><i class="fa fa-plus"></i>Add Gallery</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover" width= "100%">
        <thead>
            <tr>
                <th width="5%" scope="col">#</th>
                <th width="20%" scope="col">Image</th>
                <th width="35%" scope="col">Category</th>
                <th width="15%" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $key => $gallery)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td><img src="{{ Storage::url($gallery->image)}}" width="80"></td>
                    <td>{{ $gallery->category->name }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('gallery.edit', $gallery->id) }}">Edit</a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')" href="{{ route('gallery.delete', $gallery->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $galleries->links() }}
@endsection
