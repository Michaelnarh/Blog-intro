<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MTN-Linkork @yield("title","")</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css " type="text/css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/fontawesome/css/all.css')}}">
	@stack('stylesheet')
	<link href="{{asset("css/font-awesome.min.css")}}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top mb-4 ">
		<div class="container">
			<a href="#" class="navbar-brand">MTN-linkok</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse d-center" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="{{route('mainPages.about')}}" class="nav-link {{Request::is("about")? "myactive":""}}"
							id="about">about</a>
					</li>
					<li class="nav-item" id="blog">
						<a href="{{route('mainPages.blog')}}" class="nav-link {{Request::is("blog")? "myactive":""}}"">blog</a>
                   </li>
                   <li class =" nav-item">
							<a href="{{route("mainPages.contact")}}"
								class="nav-link {{Request::is("contact")? "myactive":""}}"" id=" contact">contact</a>
					</li>
					<li class="nav-item">
						<a href="{{route("mainPages.share")}}"
							class="nav-link {{Request::is("share")? "myactive":""}}"" id=" share">share</a>
					</li>
					<li class="nav-item">
						<a href="{{route("mainPages.support")}}"
							class="nav-link {{Request::is("support")? "myactive":""}}"" id=" support">support</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--====================== start of location to the main content =============-->
	@yield('content')
	<!--====================== end to the main content =============-->


	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap ">
		<div class="container mt-5 py-5">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Agency</h6>
						<p>
							The world has become so fasted that people don’t want to standby reading page of info they
							would much rather
							look at a presentation and understand message.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Quick Links</h6>
						<div class="row">
							<ul class="col footer-nav">
								<li><a href="#">Sitemaps</a></li>
								<li><a href="#">Categories</a></li>
								<li><a href="#">Archives</a></li>
								<li><a href="#">Advertise</a></li>
								<li><a href="#">Ad Choice</a></li>
							</ul>
							<li><a href="#">Help Center</a></li>
							<li><a href="#">Newsletters</a></li>

							<ul class="col footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Feedback</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>For business professionals caught between high OEM price mediocre print and graphic.</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
										required="" type=" email">


									<button class="click-btn btn btn-default"><i class="lnr lnr-location"
											aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
											type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
											<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
										</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instafeed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="images/Image-03.jpg" alt=""></li>
							<li><img src="images/Image-03.jpg" alt=""></li>
							<li><img src="images/Image-03.jpg" alt=""></li>
							<li><img src="images/Image-03.jpg" alt=""></li>
							<li><img src="images/Image-03.jpg" alt=""></li>
							<li><img src="images/Image-03.jpg" alt=""></li>
							<li><img src="images/Image-03.jpg" alt=""></li>
							<li><img src="images/Image-03.jpg" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
				<div>
					<p class="text-white  text-center text-4">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fab fa-heart-o"
							aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
				<div class="footer-social d-flex align-items-center">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
</body>
<script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset('js/app.js' )}}"></script>
<script>
	$(document).ready(function(){
       $("a").click(function(){
            // $(this).css({
            // "backgroundColor":"var(--mainOrange)",
            // "color":"var(--mainWhite)"

            // }
            );
       });
        
       
   });
</script>
@stack('script')

</html>