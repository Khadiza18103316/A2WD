@extends('frontend.index')
@section( 'content')

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
               <i class="fa-solid fa-location-dot"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p><br>
                  
                  <i class="fa-solid fa-phone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                  <p>+1 5589 55488 67</p>
                </div>
              </div>

            </div>
        </div>
        <div class="col-md-8 px-5 py-4 align-items-center d-flex" data-aos="fade-up" data-aos-delay="100">
          <form method="post" action="">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input type="text" name="fullname" class="form-control" placeholder="fullname" id="name" required>
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
              <textarea class="form-control" name="msg" style="height: 150px;" id="msg" required></textarea>
            </div>
            <div class="form-group">
              
              <input type="submit" name="submit" class="btn btn-primary" id="submit" >
            </div>
          </form>
        </div>
      </div>

    </div>
    @endsection