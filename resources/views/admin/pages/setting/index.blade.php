@extends('admin.master')
@section('content')

    <h3 class="mb-4">Setting</h3>

    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

@if(session()->has('message'))
    <p class="alert alert-message">{{session()->get('message')}}</p>
@endif

    <a href="{{ route('setting.create') }}" class="btn btn-primary float-end"><i class="fa fa-plus"></i>Add</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Logo Text</th>
                <th scope="col">Address</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Alternative Number</th>
                <th scope="col">Link</th>
                <th scope="col">Footer Text</th>
                <th scope="col">Location</th>
                <th scope="col">Email</th>
                <th scope="col">Logo Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($settings as $key => $setting)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $setting->logo_text }}</td>
                    <td>{{ $setting->address }}</td>
                    <td>{{ $setting->mbl_num }}</td>
                    <td>{{ $setting->alt_num }}</td>
                    <td>{{ $setting->link }}</td>
                    <td>{{ $setting->footer_text }}</td>
                    <td>{{ $setting->location}}</td>
                    <td>{{ $setting->email }}</td>
                    <td><img src="{{ Storage::url($setting->image)}}" width="80"></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('setting.details', $setting->id) }}">Details</i></a><br>
                        <a class="btn btn-info btn-sm" href="{{ route('setting.edit', $setting->id) }}">Edit</a><br>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')" href="{{ route('setting.delete', $setting->id) }}">Delete</a><br>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $settings->links() }}

@endsection
