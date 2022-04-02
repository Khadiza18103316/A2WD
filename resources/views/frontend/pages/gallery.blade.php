@extends('frontend.index')
@section( 'content')

<!-- gallery start here -->
<section class="pt-5 mt-5">

<div class="container pb-5">
	<div>
		<div class="col-lg-12 text-center my-2 py-2">
			<h3 class="m-0">Gallery</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
		</div>

 <div class="portfolio-menu mt-2 mb-4">
            <ul>
               <li class="btn btn-outline-dark active" data-filter="*">All</li>
               <li class="btn btn-outline-dark" data-filter=".web">Websites</li>
               <li class="btn btn-outline-dark" data-filter=".graphics">Graphics</li>
               <li class="btn btn-outline-dark text" data-filter=".marketing">Marketing</li>
            </ul>
         </div>
         <div class="portfolio-item row">
            @foreach ($galleries as $gallery)
            <div class="item web col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ Storage::url($gallery->image)}}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ Storage::url($gallery->image)}}" alt="">
               </a>
            </div>
            @endforeach
         </div>
	</div>
</div>
</section>
@endsection