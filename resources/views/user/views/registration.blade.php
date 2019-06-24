
<!DOCTYPE html>
<html lang="en">

<head>
	@include('user.includes.style')
</head>
<body>

	<!--header Starts-->
	@include('user.includes.header')

	<!--page Banner Section Starts-->
	<section class="page-banner" style="background-image:url(public/user/images/background/small-banner.jpg);">
		<div class="overlay">
			<div class="auto-container">
				<h1>Registration / Enrollment</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Registration</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>

	<!--page Banner Section End-->


	<!-- Program Section Start	-->


	<section class="main-registration-section">
		<div class="auto-container">
			<div class="sec-title wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
				<h2>Registration</h2>
			</div>
			<div class="row clearfix">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="fees-section">
						<div class="table-responsive">
							<table class="table table-bordered tbl-fees">
								<thead>
									<tr>
										<th>Registration Type</th>
										<th>Early Bird Rate</th>
										<th>Regular Rate</th>
										<th rowspan="2">On site*</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Indian participants</td>
										<td>4000</td>
										<td>4500</td>
										<td>5500</td>
									</tr>

									<tr>
										<td>Foreign participants</td>
										<td>$180</td>
										<td>$200</td>
										<td>$220</td>
									</tr>

									<tr>
										<td>Students</td>
										<td>3000</td>
										<td>1200</td>
										<td>2000</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="sec-text single-tbl-item wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
							<p><span class="emphasized-text">Registration for a single day</span> is also available at the site. The following rates apply.</p>
						</div>

						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Indian Participants</th>
										<th>Foriegn Participants</th>
										<th>Students</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>3000</td>
										<td>$150</td>
										<td>600</td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="row clearfix light-bg left-spacing">
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
								<input type="text" name="txtlastname" id="txtlastname" class="form-control" placeholder="Company / University Name">
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
								<label for="">Zip / Postal Code</label>
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
								<label for="">Type</label>
								<select name="ddltype" id="ddltype" class="form-control">
									<option value="0">Select Registration Type</option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
							<label for="">Fee Amount</label>
								<input type="number" name="txtamount" id="txtamount" class="form-control" placeholder="Fee Amount">
							</div>
						</div>

						<div class="col-md-12">
							<button type="button" class="btn btn-themed" style="margin: 12px 0px;width:100%;padding:10px;">Submit</button>
						</div>


					</div>
				</div>
			</div>
		</div>

	</section>

@include('user.includes.footer')

	@include('user.includes.script')
</body>

</html>
