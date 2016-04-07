<style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  
  .jumbotron { 
    background-color: #f4511e; /* Orange */
    color: #ffffff;
    
    
   
  </style>

<header>
		<div class="container-fluid">
			<div class="row">
				<h></h>
			</div>
			<div class="row">
				<h></h>
			</div>
			
			<!------------NAV BAR------->
			<div>
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						
					    <div>
					      <div class="collapse navbar-collapse" id="myNavbar">
					        <ul class="nav navbar-nav ">
							<li><a href="#section1">HOME</a></li>
       					    <li><a href="#section2">JEWELLERY</a></li>
      					    <li><a href="#section3">RINGS</a></li>
							</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
							
						</ul>
							</div>
					</div>
				</nav>			
			</div>
			</div>
		
			<div class="jumbotron">
				<h1 class="text-center">The Velvet Box</h1>      
			</div>
	
	 @section('home-page-carousel') 
		@show 

		</div>
</header>
