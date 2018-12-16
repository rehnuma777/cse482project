<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="frontend/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="frontend/css/style.css">


  <link rel="stylesheet" type="text/css" href="frontend/isotope/css/style.css">
  <link rel="stylesheet" type="text/css" href="frontend/isotope/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>
<!-- firebase authendication STARTS-->



<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCWH2LLwXzcqMEOYsPMKgecwZWBOcYFoUs",
    authDomain: "digitaldoctor-1de56.firebaseapp.com",
    databaseURL: "https://digitaldoctor-1de56.firebaseio.com",
    projectId: "digitaldoctor-1de56",
    storageBucket: "digitaldoctor-1de56.appspot.com",
    messagingSenderId: "684209724229"
  };
  firebase.initializeApp(config);
</script>

<script src="https://cdn.firebase.com/libs/firebaseui/3.5.0/firebaseui.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.0/firebaseui.css" />
    <script type="text/javascript">
      // FirebaseUI config.
      var uiConfig = {
        signInSuccessUrl: 'profile.php',
        signInOptions: [
          // Leave the lines as is for the providers you want to offer your users.
          firebase.auth.GoogleAuthProvider.PROVIDER_ID,
          firebase.auth.EmailAuthProvider.PROVIDER_ID,
          firebase.auth.FacebookAuthProvider.PROVIDER_ID,
          firebase.auth.PhoneAuthProvider.PROVIDER_ID,
        ],
        // tosUrl and privacyPolicyUrl accept either url string or a callback
        // function.
        // Terms of service url/callback.
        tosUrl: '<your-tos-url>',
        // Privacy policy url/callback.
        privacyPolicyUrl: function() {
          window.location.assign('<your-privacy-policy-url>');
        }
      };

      // Initialize the FirebaseUI Widget using Firebase.
      var ui = new firebaseui.auth.AuthUI(firebase.auth());
      // The start method will wait until the DOM is loaded.
      ui.start('#firebaseui-auth-container', uiConfig);
    </script>

<!-- auth ENDS--->

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
              <a class="navbar-brand" href="#"><img src="frontend/img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Services</a></li>
                <li class=""><a href="#about">About</a></li>
                <li class=""><a href="#testimonial">Testimonial</a></li>
                <li class=""><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
<br>
      <section id="service" class="section-padding" style="color:white">
         
<div class="card">
  <div class="card-body">
    <h1 align="center">Sign in</h1>
    <div id="firebaseui-auth-container"></div>
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
              <p>If you require an appointment service then Digital Doctor is the right choice for you. We are dedicated to serve patients first.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><a href="https://www.facebook.com/Digital-Doctor-380577215843612/" class="fa fa-facebook"></a></li>
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

  <script src="frontend/js/jquery.min.js"></script>
  <script src="frontend/js/jquery.easing.min.js"></script>
  <script src="frontend/js/bootstrap.min.js"></script>
  <script src="frontend/js/custom.js"></script>
  <script src="frontend/contactform/contactform.js"></script>

</body>

</html>
