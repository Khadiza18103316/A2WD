@extends('admin.master')
@section('content')

<h3> Details </h3>

<p>
    <td><img src="{{ Storage::url($setting->image)}}" width="80"></td>
</p>
<p>Logo Text:{{$setting->logo_text}} </p>
<p>Addrss:{{$setting->address}} </p>
<p>Mobile Number:{{ $setting->mbl_num }}</p>
<p>Alternative Number:{{ $setting->alt_num}}</p>
<p>Link:{{ $setting->link }}</p>
<p>Footer Text:{{ $setting->footer_text }}</p>
<p>Location:{{ $setting->location }}</p>
<p>Email:{{ $setting->email }}</p>

@endsection
