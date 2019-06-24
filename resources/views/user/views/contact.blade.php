
<!DOCTYPE html>
<html lang="en">

<head>
	@include('user.includes.style')
</head>
<body>

	<!--header Starts-->
	@include('user.includes.header')


	<!--Header Section-->

	<!--Page Banner-->

	<section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
		<div class="overlay">
			<div class="auto-container">
				<h1>Contact</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>





	<!--Main Contact Section-->

	<section class="contact-section">
		<div class="auto-container">

			<div class="row clearfix">

				<!--Map Area-->
				<div class="col-md-9 col-sm-7 col-xs-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30017.03480020476!2d75.35561220310579!3d19.876759270684637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1559386214364!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;width:100%;height:348px;" allowfullscreen></iframe>
				</div>

				<!--Contact Info-->
				<div class="col-md-3 col-sm-5 col-xs-12">
					<div class="contact-info">
						<h3>Contact</h3>
						<div class="text">If you are in the middle of something and you don’t want to miss that important call that could be the start of an exciting new business.</div>
						<ul class="info">
							<li><strong>Email</strong> <a href="mailto:meeton@email.com">mail@email.com</a></li>
							<li><strong>Phone</strong> <a href="#">+49 123 456 789</a></li>
							<li><strong>Fax</strong> +49 123 456 789</li>
							<li><strong>Website</strong> <a href="#">http://www.website.com</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!--Contact Form Area-->
			<div class="row clearfix">
				<div class="col-md-9 col-sm-12 col-xs-12 contact-form wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">

					<!--Contact Form-->
					<form id="contact-form" method="post" action="http://world5.commonsupport.com/html/meeton-new-with-files/sendemail.php" novalidate="novalidate">
						<div class="row clearfix">

							<div class="col-md-5 col-sm-6 col-xs-12">

								<div class="form-group">
									<label class="form-label">Name</label>
									<input type="text" name="username" value="" placeholder="Enter Your Name">
								</div>

								<div class="form-group">
									<label class="form-label">Email</label>
									<input type="email" name="email" value="" placeholder="Enter Your Email Address">
								</div>

								<div class="clearfix"></div>

								<div class="form-group">
									<label class="form-label">Subject</label>
									<input type="text" name="subject" value="" placeholder="Enter a Subject">
								</div>

							</div>

							<div class="col-md-7 col-sm-6 col-xs-12">

								<div class="form-group">
									<label class="form-label">Message</label>
									<textarea name="message" placeholder="Type Your Message Here"></textarea>
								</div>

							</div>

						</div>

						<div class="form-group text-right">
							<button type="submit" name="submit-form" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-envelope"></span> Send Message</button>
						</div>

					</form>

				</div>
			</div>

		</div>

	</section>

	@include('user.includes.footer')

@include('user.includes.script')

</body>

</html>
