<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <title>TheVelevetBox : @yield('title')</title>
<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>


  <!--BOOTSTRAP-->
  <link href={{ asset("css/bootstrap.min.css") }} rel="stylesheet">
 <link href={{ asset("css/style.css") }} rel="stylesheet">
 
 
 <!--CSS Code-->
 <style>
  .container {
      padding: 80px 120px;
  }
  
  .bg-1 {
      background-image: url("TVB/back.jpg");
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
      background-color: black;
     
  }
  .thumbnail p {
      margin-top: 15px;
      color: #fff;
      
    </style>

</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">
@include('frontend.partials._header')

@section('main')
@show

<!-- Jewellery section-->

<div id="section1" class="bg-1">
  <div class="container">
    <h3 class="text-center">Jewellery</h3>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="TVB/set.jpg" alt="set" width="300" height="300">
          <p><strong>Sets</strong></p>
          
        </div>
      </div>
      
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="TVB/ring.jpg" alt="New York" width="400" height="400">
          <p><strong>Rings</strong></p>
         
          
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="TVB/bang.jpg" alt="San Francisco" width="400" height="400">
          <p><strong>Bangles</strong></p>
     
        </div>
      </div>
    </div>
  </div>









<div id="section2" class="container-fluid">
  <h1>Section 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

<div id="section3" class="container-fluid">
  <h1>Section 3</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>



@include('frontend.partials._footer')
	
	
<!--SMOOTH SCROLLING CODE-->	
	
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 300, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
})

</script>

	
	
</body>
</html>
