@extends('frontend.index')
@section( 'content')

    <!-- Slides -->

    <div class="slider" id="slider1">
    @foreach ($homes as $home)
    <img src="{{ Storage::url($home->image)}}" height="900px" width="1370px">
    @endforeach

    <!-- The Arrows -->
    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
        </svg></i>
    <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
        </svg></i>
        
    <!-- Title Bar -->
    <span class="titleBar">
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
    </span>
   </div>
@endsection