
<!DOCTYPE html>
<html lang="en">

<head>
	@include('user.includes.style')
</head>
<body>

	<!--header Starts-->
	@include('user.includes.header')
	<!--Page Banner-->
	<section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
		<div class="overlay">
			<div class="auto-container">
				<h1>Photo Gallery</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Photo Gallery </li>
					</ol>
				</nav>
			</div>
		</div>
	</section>


	<!--Main Section-->



	<section class="image-gallery" style="padding:210px 0px 210px;">
		<div class="auto-container">
			<p>No Images To Display</p>
		</div>
	</section>

	@include('user.includes.footer')

@include('user.includes.script')

</body>

</html>
