@extends('admin.master')
@section('content')

    <h3 class="mb-4">Teammates</h3>

    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif 

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif 

@if(session()->has('message'))
    <p class="alert alert-message">{{session()->get('message')}}</p>
@endif 

    <a href="{{ route('team.create') }}" class="btn btn-primary float-end"><i class="fa fa-plus"></i>Add Teammates</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Id</th>
                <th scope="col">Phone</th>
                <th scope="col">Designation</th>
                <th scope="col">Image</th> 
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $key => $team)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->member_id }}</td>
                    <td>{{ $team->phone }}</td>
                    <td>{{ $team->designation }}</td>
                    <td><img src="{{ Storage::url($team->image)}}" width="80"></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('team.details', $team->id) }}">Details</i></a>
                        <a class="btn btn-info btn-sm" href="{{ route('team.edit', $team->id) }}">Edit</a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')" href="{{ route('team.delete', $team->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $teams->links() }}

@endsection