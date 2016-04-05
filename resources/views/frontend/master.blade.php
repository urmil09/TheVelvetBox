<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href={{ asset("css/bootstrap.min.css") }} rel="stylesheet">
</head>

<body>
<header>
		<div class="container-fluid">
			<div class="row">
				<h></h>
			</div>
			<div class="row">
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						<div class=" navbar-header">
							<a class="navbar-brand" href="#">MyAccount</a>	
							<a class="navbar-brand" href="#">Home</a>
							<a class="navbar-brand" href="#">Cart</a>
						</div>		
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>		
						</ul>
					</div>
				</nav>

			</div>
			

 				<div class="jumbotron">
   					 <h1>Bootstrap Tutorial</h1>      
 				 </div>
			
		</div>
	</header>
	<div class="container">
		<div class="col-lg-12 ">
			<div id="myCarousel" class="carousel slide center-block" data-ride="carousel">
		<!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img src={{asset('tvb/1.jpg')}} alt="Chania">
						</div>

						<div class="item">
						 <img src={{asset('tvb/2.jpg')}} alt="Chania">
						</div>

					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
			</div>
		</div>
			
	</div>


</body>
</html>
