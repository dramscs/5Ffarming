
<!DOCTYPE html>
<html lang="en">

<head>
	@include('user.includes.style')
</head>
<body>

	<!--header Starts-->
	@include('user.includes.header')
	<!-- Page Banner	-->
	<section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
		<div class="overlay">
			<div class="auto-container">
				<h1>Speakers</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Library</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>


	<!--Our Team-->
	<section class="team-section">
		<div class="auto-container">

			<div class="sec-title customized wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<h2>Meet Our Speakers</h2>
			</div>

			<div class="row clearfix">
				<!--Team Member-->
				<article class="col-lg-3 col-md-4 col-sm-6 col-xs-12 team-member wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="inner">
						<div class="card card-inner">
							<img src="{{asset('public/user/images/speakers/1.jpg')}}" alt="" title="" style="padding-bottom:30px;">
							<div class="designation-title">
								<h3>Dr. C. D. Mayee </h3>
								<p class="title">Former Chairman Of The A.S.R.B</p>
								<p></p>
							</div>
							<div style="padding: 52px 0px 15px 0px;">
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
						</div>
					</div>
				</article>
				<!--Team Member-->
				<article class="col-lg-3 col-md-4 col-sm-6 col-xs-12 team-member wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
					<div class="inner">
						<div class="card card-inner">
							<img src="{{asset('public/user/images/speakers/2.jpg')}}" alt="" title="" style="padding-bottom:30px;">
							<div class="designation-title">
								<h3>Dr. Usha Barwale </h3>
								<p class="title">Director and Chief Technology Officer (MAHYCO) India</p>
								<p></p>
							</div>
							<div style="padding: 24px 0px 15px 0px;">
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
						</div>
					</div>
				</article>
				<!--Team Member-->
				<article class="col-lg-3 col-md-4 col-sm-6 col-xs-12 team-member wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
					<div class="inner">
						<div class="card card-inner">
							<img src="{{asset('public/user/images/speakers/3.jpg')}}" alt="" title="" style="padding-bottom:30px;">
							<div class="designation-title">
								<h3>Dr.Stefania Grando</h3>
								<p class="title">Former Research Program Director - Dryland Cereals – ICRISAT</p>
								<p></p>
							</div>
							<div style="padding: 24px 0px 15px 0px;">
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
						</div>
					</div>
				</article>
				<!--Team Member-->
				<article class="col-lg-3 col-md-4 col-sm-6 col-xs-12 team-member wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					<div class="inner">
						<div class="card card-inner">
							<img src="{{asset('public/user/images/speakers/4.jpg')}}" alt="" title="" style="padding-bottom:30px;">
							<div class="designation-title">
								<h3>Dr. Popatrao Pawar</h3>
								<p class="title">Executive Director of Maharashtra State Model Village Programme</p>
								<p></p>
							</div>
							<div style="padding: 24px 0px 15px 0px;">
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
						</div>
					</div>
				</article>

				<article class="col-lg-3 col-md-4 col-sm-6 col-xs-12 team-member wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					<div class="inner">
						<div class="card card-inner">
							<img src="{{asset('public/user/images/speakers/5.jpg')}}" alt="" title="" style="padding-bottom:30px;">
							<div class="designation-title">
								<h3>Mr. V.Ravicandran</h3>
								<p class="title">Progressive Farmer</p>
								<p></p>
							</div>
							<div style="padding: 24px 0px 15px 0px;">
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
						</div>
					</div>
				</article>
			</div>

		</div>
	</section>
	@include('user.includes.footer')

@include('user.includes.script')
</body>

</html>
