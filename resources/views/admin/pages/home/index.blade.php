@extends('admin.master')
@section('content')

    <h3 class="mb-4">Home</h3>

    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif 

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif 

@if(session()->has('message'))
    <p class="alert alert-message">{{session()->get('message')}}</p>
@endif 

    <a href="{{ route('admin.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Add</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th> 
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($homes as $key => $home)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $home->name }}</td>
                    <td><img src="{{ url('/uploads/' . $home->image) }}" height="120"></td>
                    {{-- <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.home.details', $home->id) }}"><i
                                class="fas fa-eye"></i></a>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.home.edit', $home->id) }}"><i
                                class="fas fa-edit"></i></a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="{{ route('admin.bus.delete', $bus->id) }}"><i
                                class="fas fa-trash-alt"></i></a>
                    </td> --}}

                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $homes->links() }}

@endsection