<!doctype html>
<html lang="en">
  <head>
  	<title>Digital | Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
	<link rel="stylesheet" href="{{url('frontend/./assets/css/main.css')}}">
	<link rel="stylesheet" href="{{url('frontend/./assets/css/style.css')}}">
	<link rel="stylesheet" href="{{url('frontend/./assets/css/slider.css')}}">
	<link rel="stylesheet" href="{{url('frontend/./assets/css/gallery.css')}}">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	</head>
	<body>

      <!-- navbar start here -->
			<nav class="fixed-top ftco-navbar-light ftco_navbar navbar navbar-expand-lg">
		    <div class="container">
		    	<a class="navbar-brand" href="{{route('frontend.home')}}">
               <img src="{{url('frontend/./assets/img/logo.png')}}" alt="" class="logo" />
               Digital
            </a>
		    	<div class="social-media order-lg-last">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-facebook-f"></i></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-twitter"></i></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-instagram"></i></a>
		    		</p>
	        </div>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span>
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3 text-center">
		        	<li class="nav-item"><a href="{{route('frontend.home')}}" class="nav-link">Home</a></li>
		        	<li class="nav-item"><a href="{{route('frontend.about')}}" class="nav-link">About</a></li>
		        	<li class="nav-item active"><a href="{{route('frontend.gallery')}}" class="nav-link">Gallery</a></li>
		        	<li class="nav-item"><a href="{{route('frontend.team')}}" class="nav-link">Team mates</a></li>
		          <li class="nav-item"><a href="../index.html#contact" class="nav-link">Contact</a></li>
		        </ul>
		      </div>
		    </div>
		  </nav>
    <!-- END nav -->

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

<!-- footer start here -->

<div class="mt-5 pt-5 pb-2 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company pb-4">
      <h2>DIGITAL</h2>
      <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
   
    </div>
    <div class="col-lg-3 col-xs-12 links pb-4">
      <h4 class="mt-lg-0 mt-sm-3 text-white">Useful Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="{{route('frontend.home')}}">Home</a></li>
          <li>- <a href="{{route('frontend.about')}}">About</a></li>
          <li>- <a href="{{route('frontend.gallery')}}">Gallery</a></li>
          <li>- <a href="{{route('frontend.team')}}">Team mates</a></li>
          <li>- <a href="../index.html#contact">Contact</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location pb-4 ">
      <h4 class="mt-lg-0 mt-sm-4 text-white">Location</h4>
      <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
      <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
    </div>
  </div>
  <div class="row mt-1">
    <div class="col copyright">
      <p class="pt-2 text-center"><small class="text-white-50">© 2022 Copyright: A2 Web Developers</small></p>
    </div>
  </div>
</div>
</div>

  <script src="{{url('frontend/./assets/js/jquery.min.js')}}"></script>
  <script src="{{url('frontend/./assets/js/popper.js')}}"></script>
  <script src="{{url('frontend/./assets/js/bootstrap.min.js')}}"></script>
  <script src="{{url('frontend/./assets/js/main.js')}}"></script>
  <script src="{{url('frontend/./assets/js/slider.js')}}"></script>
 


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
   <script src="{{url('frontend/./assets/js/filter.js')}}"></script>
	</body>
</html>
