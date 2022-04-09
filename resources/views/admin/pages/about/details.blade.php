@extends('admin.master')
@section('content')

<h3> Details </h3>

<p>                        
    <td><img src="{{ Storage::url($about->image)}}" width="80"></td>
</p>
<p>Name:{{$about->description}} </p>
@endsection