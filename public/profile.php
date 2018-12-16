<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
</head>





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

<body>
  <script type="text/javascript">
    firebase.auth().onAuthStateChanged(function(user){
      if(user){
        document.body.innerHTML = '<h1> Congrats ' + user.displayName + ', you are done! </h1> <h2>Your email address is. ' + user.email + '</h2>';
      }else{
        console.log("no user signed in");
      }
    });
  </script>
<h1>Congrats you are done! Your email address is.</h1>
</body>
</html>