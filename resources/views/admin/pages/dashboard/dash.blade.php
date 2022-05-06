@extends('admin.master')

@section('content')

@if(session()->has('message'))
<p class="alert alert-success">
    {{session()->get('message')}}
</p>
@endif

<div class="page-heading">
    <h3 class="text-center">Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                        <i class="bi bi-grid-1x2-fill"></i>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Banner</h6>
                                    <h6 class="font-extrabold mb-0">{{$count['home']}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="bi bi-image-fill"></i>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Gallery</h6>
                                    <h6 class="font-extrabold mb-0">{{$count['gallery']}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                <i class="fa-solid fa-user"></i>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">User</h6>
                                    <h6 class="font-extrabold mb-0">{{$count['user']}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                  <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Teammate</h6>
                                    <h6 class="font-extrabold mb-0"> {{$count['team']}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
