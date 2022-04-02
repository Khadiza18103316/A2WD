<!doctype html>
<html lang="en">
  <head>
  	<title>Digital  |  Home</title>
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
	</head>
	<body>

	@include('frontend.partials.header')
	@yield('content')
	@include('frontend.partials.footer')

{{--  JS --}}
  <script src="{{url('frontend/./assets/js/jquery.min.js')}}"></script>
  <script src="{{url('frontend/./assets/js/popper.js')}}"></script>
  <script src="{{url('frontend/./assets/js/bootstrap.min.js')}}"></script>
  <script src="{{url('frontend/./assets/js/main.js')}}"></script>
  <script src="{{url('frontend/./assets/js/slider.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

  <script src="{{url('frontend/./assets/js/filter.js')}}"></script>

	</body>
</html>
