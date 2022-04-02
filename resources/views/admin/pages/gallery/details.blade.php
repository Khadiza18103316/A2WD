@extends('admin.master')
@section('content')

<h3> Details </h3>

<p>                        
    <td><img src="{{ Storage::url($gallery->image)}}" width="80"></td>
</p>
<p>Name:{{$gallery->name}} </p>
<p>Category:{{ $gallery->category }}</p>
@endsection