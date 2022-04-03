@extends('frontend.index')
@section('content')

<br>
<br>
<br>
    <h3 class="text-center">Teammates</h3>
            @if (!empty($teams))
            @foreach ($teams as $team)
            <div class="teammates d-flex flex-column gap-4 teammates">
               <div class="card">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="w-100 h-100">
                           <img src="{{ Storage::url($team->image)}}" alt="" class="img-fluid fitImg" />
                        </div>
                     </div>
                     <div class="col-md-9">
                        <div class="card-body">
                           <h4 class="card-title">{{ $team->name }}</h4>
                           <p class="m-0 text-muted">ID : {{ $team->member_id }}</p>
                           <p class="card-text">{{ $team->designation }}</p>
                          <span class="social-media-profile">
                              <a href="https://facebook.com" target="_blank"> <i class="fa-brands fa-facebook"></i></a>
                              <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                              <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            @else
            <tr>
                <h1>
                    Teammates not found...404!
                </h1>
                <th></th>
            </tr>
            @endif
       
@endsection