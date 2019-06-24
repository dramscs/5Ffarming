
<!DOCTYPE html>
<html lang="en">

<head>
	@include('user.includes.style')
</head>
<body>

	<!--header Starts-->
	@include('user.includes.header')

	<!-- Header Section Starts -->

	<!-- Page Banner-->
	<section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
		<div class="overlay">
			<div class="auto-container">
				<h1>Abstract Submission</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Abstract Submission</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>

	<!-- Main Section -->

	<section class="main-abssubmition-section">
		<div class="auto-container">
			<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<h2>Poster & Abstract Submission</h2>
			</div>

			<div class="text-style wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<p>All the attendees are invited to submit their abstract the for poster display during the conference’19. However, your registration must be completed before the submission of the abstract. A link for abstract submission will be included in the registration confirmation email. Very few abstract will be selected for the oral presentation while majority will be selected for the poster presentation. For the poster presentation, each presenter will have option to give one minute talk during the poster session and best poster will be awarded during the conference. All abstract must be received on or before December 15th, 2018</p>
			</div>

			<div class="content-wrapper-absubmission wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
				<div class="row clearfix">

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row clearfix light-bg right-spacing">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Select Title</label>
									<select name="ddltitle" id="ddltitle" class="form-control">
										<option value="0">Select Title</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">First Name</label>
									<input type="text" name="txtfirstname" id="txtfirstname" class="form-control" placeholder="First Name">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Last Name</label>
									<input type="text" name="txtlastname" id="txtlastname" class="form-control" placeholder="Last Name">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Company / University</label>
									<input type="text" name="txtcompany" id="txtcompany" class="form-control" placeholder="Company / University Name">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" name="txtemail" id="txtemail" class="form-control" placeholder="Email">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Mobile No</label>
									<input type="number" name="txtmobileno" id="txtmobileno" class="form-control" placeholder="Mobile No">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Address</label>
									<input type="text" name="txtaddress" id="txtaddress" class="form-control" placeholder="Address">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Zip/Postal Code</label>
									<input type="number" name="txtzipcode" id="txtzipcode" class="form-control" placeholder="Zip / Postal Code">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">City</label>
									<input type="text" name="txtcity" id="txtcity" class="form-control" placeholder="City">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Province</label>
									<input type="text" name="txtprovince" id="txtprovince" class="form-control" placeholder="Province">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Country</label>
									<input type="text" name="txtCountry" id="txtCountry" class="form-control" placeholder="Country">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">Upload file</label>
									<input type="file" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="">fee Amount</label>
									<input type="number" name="txtamount" id="txtamount" class="form-control" placeholder="Fee Amount">
								</div>
							</div>

							<div class="col-md-12">
								<button type="button" class="btn btn-themed" style="margin: 12px 0px;width:100%;padding:10px;">Submit Abstract / Poster</button>
							</div>


						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="info-section-abs">

							<div class="top-text-block">
								<h3>Poster Submission Guidelines </h3>
								<p>1.Maximum poster board dimensions are 36 inches (91 cm) high x 48 inches (121 cm) wide. Presenters are encouraged to practice delivering a short summary of the project Presenters are requested to remain with their posters during their assigned poster session</p>
								<p>2.Presenters are requested to remain with their posters during their assigned poster session</p>
							</div>

							<div class="middle-text-block">
								<h3>Abstract Submission Guidelines </h3>
								<p>1. Submission deadline is Dec 15th, 2018</p>
								<p>2. Main text of abstract under 300 words</p>
							</div>

							<div class="bottom-text-block">
								<h4>CORRESPONDENCE</h4>
								<p>Please address all future communications and further enquires related to the conference to</p>
								<div class="conference-details">
									<p>Organising Secretary</p>
									<p>secretary.conference2019@gmail.com</p>
									<p>+91 8793988121</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>
