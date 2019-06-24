
<!DOCTYPE html>
<html lang="en">

<head>
	@include('user.includes.style')
</head>
<body>

	<!--header Starts-->
	@include('user.includes.header')

	<!-- Page Banner Section Starts	-->
	<section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
		<div class="overlay">
			<div class="auto-container">
				<h1>Exibhition</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Exibhition</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>


	<!--Main Section Starts-->

	<section class="main-exhibition-section">
		<div class="auto-container">

			<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<h2>Exhibition</h2>
			</div>

			<div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<p>There will be an opportunity for manufacturers, suppliers, technologist to showcase their product and service for this vital industry and market.</p>
			</div>

			<div class="content-wrapper">

				<p>Exhibitor can choose following options</p>

				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Normal size booth (9 m square – 3m x 3m)</th>
								<th>Big size booth (18 m square)</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>35,000</td>
								<td>50,000</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<p>A limited space will be available for commercial vendors’ displays during the symposium. Interested parties should contact the conference secretary by email at secretary.conference2019@gmail.com, by 30 November 2018.</p>


			</div>


		</div>
	</section>
	@include('user.includes.footer')

@include('user.includes.script')
</body>

</html>
