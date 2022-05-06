<!-- footer start here -->
<div class="mt-5 pt-5 pb-2 footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company pb-4">
          <h2>DIGITAL</h2>
          @foreach($settings as $setting)
          <p class="pr-5 text-white-50">{{ $setting->footer_text }}</p>

        </div>
        <div class="col-lg-3 col-xs-12 links pb-4">
          <h4 class="mt-lg-0 mt-sm-3 text-white">Useful Links</h4>
            <ul class="m-0 p-0">
              <li>- <a href="{{route('frontend.home')}}">Home</a></li>
              <li>- <a href="{{route('frontend.about')}}">About</a></li>
              <li>- <a href="{{route('frontend.gallery')}}">Gallery</a></li>
              <li>- <a href="{{route('frontend.team')}}">Team mates</a></li>
              <li>- <a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-xs-12 location pb-4 ">
          <h4 class="mt-lg-0 mt-sm-4 text-white">Location</h4>
          <p>{{ $setting->location}}</p>
          <p class="mb-0"><i class="fa fa-phone mr-3"></i>{{$setting->footer_num}}</p>
          <p><i class="fa fa-envelope-o mr-3"></i>{{ $setting->email }}</p>
        </div>
        @endforeach
      </div>
      <div class="row mt-1">
        <div class="col copyright">
          <p class="pt-2 text-center"><small class="text-white-50">© 2022 Copyright: A2 Web Developers</small></p>
        </div>
      </div>
    </div>
    </div>
