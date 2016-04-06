<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TheVelevetBox : @yield('title')</title>
<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>


  <!--BOOTSTRAP-->
  <link href={{ asset("css/bootstrap.min.css") }} rel="stylesheet">
 <link href={{ asset("css/style.css") }} rel="stylesheet">

</head>


<body>
@include('frontend.partials._header')

@section('main')
@show
	
</body>
</html>
