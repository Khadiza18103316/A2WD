@extends('frontend.index')
@section( 'content')

<div class="slider" id="slider1">
    <!-- Slides -->

    @foreach ($homes as $home)
    <div>
      <img src="{{ Storage::url($home->image)}}"  width="100%">
    </div>
    @endforeach

    <!-- The Arrows -->
    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
        </svg></i>
    <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
        </svg></i>

    <!-- Title Bar -->
    @foreach($settings as $setting)
    <span class="titleBar">
        <h1>{{ $setting->banner_text }}</h1>
    </span>
    @endforeach
</div>


<!-- gallery start here -->
<div class="container py-5">
	<div class="row">
		<div class="col-lg-12 text-center my-2">
			<h3 class="m-0">Gallery</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
		</div>
	</div>
	<div class="portfolio-item row pt-2">

        @foreach ($galleries as $gallery)
            <div class="item web col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ Storage::url($gallery->image)}}" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="{{ Storage::url($gallery->image)}}" alt="">
               </a>
            </div>
            @endforeach
	</div>
<div>
	<p class="text-muted text-end moveTo"><a href="{{route('frontend.gallery')}}">See more</a></p>
</div>
</div>

<!-- team section start here -->
<div class="container py-5">
	<div class="container-info text-center pb-4">
		<h1>Team mates</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
	</div>
	<div class="container">
		<div class="justify-content-center row">
      @foreach ($teams as $team)
			<div class="col-6 p-3 col-lg-2 col-md-5 col-sm-6 p-md-3 p-sm-3">
				<div class="bg-transparent border-0 card m-auto overflow-hidden rounded-circle teamMember">
					<div class="w-100 h-100">
                        <img class="card-img-top rounded-circle h-100 fitImg" src="{{ Storage::url($team->image)}}" height="900px" width="1370px" alt="Card image cap" >
					  </div>
					<div class="card-body position-absolute memberInfo pt-1" >
						<h4 class="card-title text-white m-0">{{ $team->name }}</h4>
						<p class="card-text text-white">ID : {{ $team->member_id }}</p>
					</div>
				</div>
			</div>
      @endforeach
		</div>
		<div>
			<p class="text-muted text-end moveTo"><a href="{{route('frontend.team')}}">See more</a></p>
	  </div>
	</div>
</div>


<!-- contact start here -->
<div class="contact" id="contact">
      <div class="container py-5">
	    <div class="container-info text-center pb-4">
			<h1>Contact</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
		</div>
        <div class="row">
          <div class="col-md-4 ">
             <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 col-6 p-3 col-lg-12 m-auto">
                  <div class="info-box mb-4 cap">
                    @foreach($settings as $setting)
                 <i class="fa-solid fa-location-dot"></i>
                    <h3>Our Address</h3>
                    <p>{{$setting->address}}</p><br>

                    <i class="fa-solid fa-phone"></i>
                    <h3>Call Us</h3>
                    <p>{{$setting->mbl_num}}</p>
                    <p>{{ $setting->alt_num }}</p>
                  </div>
                  @endforeach
                </div>
              </div>
          </div>

          <div class="col-md-8 px-5 py-4 align-items-center d-flex" data-aos="fade-up" data-aos-delay="100">
                <form action="{{route('send.email')}}" method="POST">@csrf

            @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
            @endif

              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" id="name" required>
                    <p id="error"></p>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" id="email" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" style="height: 150px;" id="message" required></textarea>
              </div>
              <div class="form-group">

                <input type="submit" name="submit" class="btn btn-primary float-end" id="submit" >
              </div>
            </form>
          </div>
        </div>
      </div>
      @endsection
