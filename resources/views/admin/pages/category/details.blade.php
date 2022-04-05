@extends('admin.master')
@section('content')

<h3> Details </h3>

<p>                        
    <td><img src="{{ Storage::url($category->image)}}" width="80"></td>
</p>
<p>Name:{{$category->name}} </p>
<p>Category:{{ $category->category_id }}</p>
@endsection