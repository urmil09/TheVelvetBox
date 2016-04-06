@extends('frontend.master')

@section('title','HOME')

@section('home-page-carousel')

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

						<div class="item">
						 <img src={{asset('tvb/3.jpg')}} alt="Chania">
						</div>

						<div class="item">
						 <img src={{asset('tvb/4.jpg')}} alt="Chania">
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

@endsection

