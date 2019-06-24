
<!DOCTYPE html>
<html lang="en">

<head>
	@include('user.includes.style')
</head>
<body>

	<!--header Starts-->
	@include('user.includes.header')

	<!--Header Section Start-->


	<!--Page Banner-->
	<section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
		<div class="overlay">
			<div class="auto-container">
				<h1>Awards</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Awards</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>

	<!-- Main Section Start	-->
	
	<section class="main-section-start">
		<div class="auto-container">
			<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<h2>Awards</h2>
			</div>
			<div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<p>The following awards will be presented in the Valedictory session</p>
			</div>
			
			<div class="content-wrapper-awards wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<h3>1. Breeder of the Year</h3>
				<p> 'Breeder of the Year' Award for excellence in Plant breeding (eminent breeder who has made significant contributions to the field)</p>
				
				<h3>2. Oral and Poster presentation</h3>
				<p>Award for best Oral and Poster presentation</p>
			</div>
		</div>
	</section>

	@include('user.includes.footer')

	@include('user.includes.script')

</body>

</html>
