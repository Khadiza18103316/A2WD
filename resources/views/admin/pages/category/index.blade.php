@extends('admin.master')
@section('content')

    <h3 class="mb-4">Category</h3>

    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif 

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif 

@if(session()->has('message'))
    <p class="alert alert-message">{{session()->get('message')}}</p>
@endif 

    <a href="{{ route('category.create') }}" class="btn btn-primary float-end"><i class="fa fa-plus"></i>Add Category</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category Id</th>
                <th scope="col">Image</th> 
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $category)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->category_id}}</td>
                    <td><img src="{{ Storage::url($category->image)}}" width="80"></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('category.details', $category->id) }}">Details</i></a>
                        <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category->id) }}">Edit</a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')" href="{{ route('category.delete', $category->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}

@endsection