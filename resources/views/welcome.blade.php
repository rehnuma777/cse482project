<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/isotope/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/isotope/css/bootstrap-datetimepicker.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
              <a class="navbar-brand" href="#"><img src="{{URL::to('frontend/img/logo.png')}}" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="{{URL::to('http://127.0.0.1:8000')}}">Home</a></li>
                <li class=""><a href="#doctors">Doctors</a></li>
                <li class=""><a href="#about">About</a></li>
                <li class=""><a href="#testimonial">Testimonial</a></li>
                <li class=""><a href="#appointment">Appointment</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="{{URL::to('frontend/img/logo.png')}}" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Healthcare at your desk!!</h1>
              <p>We provide Fast and Proper Medical Treatment at your <br>earliest convenience.</p>
              <a href="#appointment" class="btn btn-appoint">Make an Appointment.</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="doctors" class="section-padding">
    <h2 class="text-center"> Our Doctor Categories</h2>
    <br><br>

 
<div class="container">
  <div class="wallpaper-menu">
   <ul>
   
      <li class="active" data-filter="*">All Catagory</li>
       @foreach($services as $service)
       <li data-filter="{{$service->id}}">{{$service->speciality}}</li>
         @endforeach
    </ul>
  </div>
</div>
<div class="container"> 
  <div class="wallpaper-item">
       <ul>
          @foreach($item as $items)
      <li class="item" id="{{$items->service->id}}"> <a href="#">{{$items->service->name}}</a> , </li>
      @endforeach
    </ul>
  </div>
</div>
<hr>
  </section>
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Emergency Case</h3>
              <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Emergency Case</h3>
              <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Opening Hours</h3>
              <table style="margin: 8px 0px 0px;" border="1">
                <tbody>
                  <tr>
                    <td>Sunday - Thursday</td>
                    <td>8.00AM - 10.00PM</td>
                  </tr>
                  <tr>
                    <td>Friday</td>
                    <td>9.30AM - 7.30PM</td>
                  </tr>
                  <tr>
                    <td>Saturday</td>
                    <td>9.30AM - 9.00PM</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">The Medilab+ <br>Ultimate Dream</h2>
            <hr class="botm-line">
            <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
            <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Meet Our Doctors!</h2>
          <hr class="botm-line">
        </div>
@foreach($sliders as $key=>$slider)
        <div class="col-md-3 col-sm-3 col-xs-6">  
          <div class="thumbnail">
          
            <img src="{{asset('uploads/slider/'.$slider->image)}}" alt="..." class="team-img">
            
            <div class="caption">
              <h3>{{$slider->name}}</h3>
              <p>{{$slider->type}}</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>     

          </div>
           
        </div>
        @endforeach 
      </div>
    </div>
  </section>
  
  
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">see what patients are saying?</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Thanks Medilab+ for creating this wonderful platform!</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="{{URL::to('frontend/img/d.jpg')}}" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Shehzad<span>Ali</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>I booked an appoinment on 2nd december. Got great service.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="{{URL::to('frontend/img/b.jpg')}}" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Mahbub<span>Rahman</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Very good service. I am very pleased! Thanks Medilab+</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="{{URL::to('frontend/img/c.jpg')}}" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>khan</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ testimonial-->
  <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          If you require an appointment service then Medilab is the right choice for you. We are dedicated to serve patients first.
          <p class="text-right text-primary"><i>— Medilab+</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--contact-->
  <section id="appointment" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Medilab+<br> Bangladesh, 1213</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>medilab@edu</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+880 167 111 0000</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Book your appointment here!</h3>
            <div class="space"></div>
            <div id="sendmessage">Your appointment is booked. Thank you!</div>
            <div id="errormessage"></div>
            <form class="contactForm" method="post" action="{{ route('reservation.reserve') }}">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone"  placeholder="Phone number";  Phone">
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" placeholder="Date and time";  Time">

              </div>

          <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="We're listening!"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Book your appointment</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>If you require an appointment service then Medilab is the right choice for you. We are dedicated to serve patients first.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="{{URL::to('http://127.0.0.1:8000')}}"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#doctors"><i class="fa fa-circle"></i>Doctors</a></li>
                <li><a href="#appointment"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright by Medilab. All Rights Reserved<br>
            Developed by Ashraf, Rehnuma,Ifaz & Saidur

          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/custom.js')}}"></script>
  <script src="{{asset('frontend/contactform/contactform.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/isotope/js/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/isotope/js/script.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend/js/bootstrap-datetimepicker.min.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
      $(function () {
          $('#datetimepicker1').datetimepicker({
              format: "dd MM yyyy - HH:mm P",
              showMeridian: true,
              autoclose: true,
              todayBtn: true

          });
      })
  </script>
  {!! Toastr::message() !!}

</body>

</html>
