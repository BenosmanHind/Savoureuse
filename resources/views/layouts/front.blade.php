<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="SocialChef - Social Recipe HTML Template" />
	<meta name="description" content="SocialChef - Social Recipe HTML Template">
	<meta name="author" content="themeenergy.com">
	
	<title>Savoureuse</title>





	  

	<link rel="stylesheet" href="{{asset('Accueil/rating2/simple-rating.css')}}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="{{ asset('Accueil/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('Accueil/css/icons.css') }}" />
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet">
	<script src="https://use.fontawesome.com/e808bf9397.js"></script>
	<link rel="shortcut icon" href="{{ asset('Accueil/images/favicon.ico') }}" />

   


	
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!--preloader-->
	<div class="preloader">
		<div class="spinner"></div>
	</div>
	<!--//preloader-->
	
	<!--header-->
	<header class="head" role="banner">
		<!--wrap-->
		<div class="wrap clearfix">
			<a href="index.html" title="SocialChef" class="logo"><img src="{{ asset('Accueil/images/ico/logo.png') }}" alt="SocialChef logo" /></a>
			
			<nav class="main-nav" role="navigation" id="menu">
				<ul>
					<li class="current-menu-item"><a href="\" title="Home"><span>Home</span></a></li>
					<li><a href="{{ url('LesRecettes') }}" title="Recipes"><span>Recettes</span></a>
						
					</li>
					
				
				</ul>
			</nav>
			
			<nav class="user-nav" role="navigation">
				<ul>
					
					@auth
					@if (Auth::User()->type==1)
					
					<li class="medium"><a href="{{ url('home-dashboard-cuisinier') }}" title="My account"><i class="icon icon-themeenergy_chef-hat"></i> <span>Mon Dashboard</span></a></li>
					@endif
					@endauth
					
				</ul>
			</nav>
		</div>
		<!--//wrap-->
	</header>
	<!--//header-->

    @yield('content')

    <!--footer-->
	<footer class="foot" role="contentinfo">
		<div class="wrap clearfix">
			<div class="row">
				<article class="one-half">
					<h5>About SocialChef Community</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
				</article>
				<article class="one-fourth">
					<h5>Need help?</h5>
					<p>Contact us via phone or email</p>
					<p><em>T:</em>  +1 555 555 555<br /><em>E:</em>  <a href="#">savoureuse@email.com</a></p>
				</article>
				<article class="one-fourth">
					<h5>Follow us</h5>
					<ul class="social">
						<li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
						<li><a href="#" title="youtube"><i class="fa  fa-fw fa-youtube"></i></a></li>
						<li><a href="#" title="rss"><i class="fa  fa-fw fa-rss"></i></a></li>
						<li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
						<li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
						<li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
						<li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
						<li><a href="#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
					</ul>
				</article>
				
				<div class="bottom">
					<p class="copy">Copyright 2021 Savoureuse. Tous les droits sont réservés</p>
					
					<nav class="foot-nav">
						<ul>
							<li><a href="/" title="Home">Home</a></li>
							<li><a href="{{ url('LesRecettes') }}" title="Recipes">Les Recettes</a></li>
							   
							
							<li><a href="{{ url('/login') }}" title="Login">Login</a></li>	<li><a href="{{ url('register') }}" title="Register">Register</a></li>													
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</footer>
	<!--//footer-->







	<script src="{{ asset('Accueil/js/jquery-3.1.0.min.js')}}"></script>
	<script src="{{ asset('Accueil/js/jquery.uniform.min.js') }}"></script>
	<script src="{{ asset('Accueil/js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('Accueil/js/scripts.js') }}"></script>
	<script src="{{ asset('Accueil/js/home.js') }}"></script>	
	
	<script src="{{asset('Accueil/rating2/simple-rating.js')}}"></script>
	
	<script>
		$( document ).ready(function() {
			$('.rating').rating();
  		 });	 
    </script>
	
	
	

</body>
</html>
