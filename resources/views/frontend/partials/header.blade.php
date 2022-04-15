<!-- navbar start here -->
<nav class="fixed-top ftco-navbar-light ftco_navbar navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{route('frontend.home')}}">
        @foreach($settings as $setting)
        <img src="{{ Storage::url($setting->image)}}" alt="" class="logo" />
        {{ $setting->logo_text }}
    </a>
        <div class="social-media order-lg-last">
            <p class="mb-0 d-flex">
                <a href="{{ $setting->link }}" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-instagram"></i></a>
            </p>
    </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto mr-md-3 text-center">
            <li class="nav-item active"><a href="{{route('frontend.home')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('frontend.about')}}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{route('frontend.gallery')}}" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="{{route('frontend.team')}}" class="nav-link">Team mates</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
    @endforeach
  </nav>
<!-- END nav -->
