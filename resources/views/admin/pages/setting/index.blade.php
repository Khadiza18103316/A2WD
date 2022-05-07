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

    <a href="{{ route('setting.create') }}" class="btn btn-primary float-end"><i class="fa fa-plus"></i>Add Setting</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover" width="100%">
        <thead>
            <tr>
                <th width="5%" scope="col">#</th>
                <th width="8%" scope="col">Logo Image</th>
                <th width="8%" scope="col">Logo Text</th>
                <th width="8%" scope="col">Address</th>
                <th width="8%" scope="col">Mobile Number</th>
                <th width="8%" scope="col">Alternative Number</th>
                <th width="8%" scope="col">Facebook Link</th>
                <th width="8%" scope="col">Footer Text</th>
                <th width="8%" scope="col">Location</th>
                <th width="8%" scope="col">Email</th>
                <th width="8%" scope="col">Footer Number</th>
                <th width="15%" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($settings as $key => $setting)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td><img src="{{ Storage::url($setting->image)}}" width="80"></td>
                    <td>{{ $setting->logo_text }}</td>
                    <td>{{ $setting->address }}</td>
                    <td>{{ $setting->mbl_num }}</td>
                    <td>{{ $setting->alt_num }}</td>
                    <td>{{ $setting->fb_link }}</td>
                    <td>{{ $setting->footer_text }}</td>
                    <td>{{ $setting->location}}</td>
                    <td>{{ $setting->email }}</td>
                    <td>{{ $setting->footer_num }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('setting.edit', $setting->id) }}">Edit</a><br>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete?')" href="{{ route('setting.delete', $setting->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
