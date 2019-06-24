
<!DOCTYPE html>
<html lang="en">

<head>
	@include('user.includes.style')
</head>
<body>

	<!--header Starts-->
	@include('user.includes.header')

	<!--header Ends-->

	<!--Page banner Start-->
	<section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
		<div class="overlay">
			<div class="auto-container">
				<h1>Sponsorship</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{asset('/')}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Sponsorship</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>
	<!--Page banner End-->

	<!--Sponsorship Section Starts-->

	<section class="sponsorship-section-main">
		<div class="auto-container">
			<div class="sec-title wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
				<h2>Sponsorship</h2>
			</div>
			<div class="sec-text wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
				<p>All top corporations, Scientific Institutes, vendors and technology providers, emerging companies and startups are welcome to become part of this International Event by becoming sponsors. There are different categories of sponsorship offered are listed below.</p>
			</div>


			<div class="sponsorship-info-tbl">
				<div class="table-responsive wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<table class="table table-bordered table-striped ">
						<thead>
							<tr>
								<th>Sr No</th>
								<th>Sponsership</th>
								<th>Proposed No</th>
								<th>Amount (Rs)</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>1</td>
								<td>Gold</td>
								<td>1</td>
								<td>5,00,000</td>
							</tr>

							<tr>
								<td>2</td>
								<td>Silver</td>
								<td>2</td>
								<td>2,50,000</td>
							</tr>

							<tr>
								<td>3</td>
								<td>Bronze</td>
								<td>2</td>
								<td>1,50,000</td>
							</tr>

							<tr>
								<td>4</td>
								<td>Networking Dinner</td>
								<td>2</td>
								<td>3,00,000</td>
							</tr>

							<tr>
								<td>5</td>
								<td>Lunch</td>
								<td>2</td>
								<td>1,00,000</td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>

			<div class="tab-sponsorship style-two">

				<div class="sec-text wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<p>As a Sponsor, you will get the following entitlements.</p>
				</div>

				<div class="tabbed-details">
					<!--Schedule Box-->
					<div class="schedule-box clearfix wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

						<!--Tab Buttons-->
						<ul class="tab-buttons clearfix">
							<li class="tab-btn active" data-id="#gold"><span class="day">Gold</span><span class="date">Sponsorship</span><span class="curve"></span></li>
							<li class="tab-btn" data-id="#silver"><span class="day">Silver</span><span class="date">Sponsorship</span><span class="curve"></span></li>
							<li class="tab-btn" data-id="#bronze"><span class="day">Bronze</span><span class="date">Sponsorship</span><span class="curve"></span></li>
							<li class="tab-btn" data-id="#network-dinner"><span class="day">Network Dinner</span><span class="date">Sponsorship</span><span class="curve"></span></li>
							<li class="tab-btn" data-id="#lunch"><span class="day">Lunch</span><span class="date">Sponsorship</span><span class="curve"></span></li>
						</ul>

						<!--Tabs Box-->
						<div class="tabs-box">

							<!--Tab / Current / Gold-->
							<div class="tab current" id="gold">

								<div class="hour-box active-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn active">
										<h3>As a Gold Sponsor, you will get the following entitlements</h3> <br>
									</div>
									<div class="content-box collapsed">
										<div class="content list-content">
											<ul class="list-item">
												<li>Five complimentary registrations</li>
												<li>One speaker slot in a session of choice</li>
												<li>One exhibition booth in a central location</li>
												<li>A representative on the dais and to provide remarks at the inaugural session</li>
												<li>Full page advertisement in the abstracts book on Inside Front Cover Page</li>
												<li>Acknowledgment during the Inaugural and Valedictory sessions</li>
												<li>Corporate signage/logo will be prominently displayed in the registration area, stage backdrop and conference hall</li>
												<li>Logo in Acknowledgement Page of Conference Booklet</li>
												<li>Logo on conference -2019 website with link to sponsor's website</li>
												<li>Sponsor can include promotional material in the conference kits provided to delegates</li>
											</ul>

										</div>
									</div>
								</div>

								<div class="hour-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn">
										<h3>Post-Event Benefits</h3>
									</div>
									<div class="content-box">
										<div class="content ist-content">
											<ul class="list-item">
												<li>Sponsor’s Logo will be placed in next year’s brochure as “Last year’s sponsor”</li>
												<li>List of participants with contact details will be shared</li>
											</ul>
										</div>

									</div>
								</div>



							</div>

							<!--Tab / Silver-->
							<div class="tab" id="silver">

								<div class="hour-box active-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn active">
										<h3>The silver sponsor gets the following entitlements</h3> <br>
									</div>
									<div class="content-box collapsed">
										<div class="content list-content">
											<ul class="list-item">
												<li>Three complimentary registrations</li>
												<li>One exhibition booth</li>
												<li>Acknowledgment during the Inaugural and Valedictory sessions</li>
												<li>Corporate Signage/Logo will be displayed at on-site registration booths and the Stage backdrops</li>
												<li>Logo in Acknowledgement Page of Conference Booklet</li>
												<li>Logo on conference -2019 website with link to sponsor's website</li>

											</ul>

										</div>
									</div>
								</div>

								<div class="hour-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn">
										<h3>Post-Event Benefits</h3>
									</div>
									<div class="content-box">
										<div class="content ist-content">
											<ul class="list-item">
												<li>Sponsor’s Logo will be placed in next year’s brochure as “Last year’s sponsor”</li>
												<li>List of participants with contact details will be shared</li>
											</ul>
										</div>

									</div>
								</div>

							</div>

							<!--Tab / Bronze-->
							<div class="tab" id="bronze">

								<div class="hour-box active-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn active">
										<h3>The bronze sponsor gets the following entitlements</h3> <br>
									</div>
									<div class="content-box collapsed">
										<div class="content list-content">
											<ul class="list-item">
												<li>One complimentary registration</li>
												<li>Acknowledgment during the Inaugural and Valedictory sessions</li>
												<li>Corporate Signage/Logo will be displayed at on-site registration booths and the Stage backdrops</li>
												<li>Logo in Acknowledgement Page of Conference Booklet</li>
												<li>Logo on conference -2019 website with link to sponsor's website</li>

											</ul>

										</div>
									</div>
								</div>

								<div class="hour-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn">
										<h3>Post-Event Benefits</h3>
									</div>
									<div class="content-box">
										<div class="content ist-content">
											<ul class="list-item">
												<li>Sponsor’s Logo will be placed in next year’s brochure as “Last year’s sponsor”</li>
												<li>List of participants with contact details will be shared</li>
											</ul>
										</div>

									</div>
								</div>



							</div>

							<!--Tab / Network-Dinner-->
							<div class="tab" id="network-dinner">

								<div class="hour-box active-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn active">
										<h3>This is an opportunity to introduce your organization and its offerings to the Conference delegates. The gala dinner sponsor gets the following entitlements</h3> <br>
									</div>
									<div class="content-box collapsed">
										<div class="content list-content">
											<ul class="list-item">
												<li>Three complimentary registrations</li>
												<li>An opportunity to welcome the delegates for the dinner and make a short presentation about your organization</li>
												<li>Acknowledgment during the Inaugural and Valedictory sessions</li>
												<li>Corporate Signage/Logo will be displayed at on-site registration booths and the Stage backdrops</li>
												<li>You can display your corporate signage/logo in the dinner area and distribute promotional material by including it in the Conference kit.</li>
												<li>Logo in Acknowledgement Page of Conference Booklet</li>
												<li>Logo on conference -2019 website with link to sponsor's website</li>

											</ul>

										</div>
									</div>
								</div>

								<div class="hour-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn">
										<h3>Post-Event Benefits</h3>
									</div>
									<div class="content-box">
										<div class="content ist-content">
											<ul class="list-item">
												<li>Sponsor’s Logo will be placed in next year’s brochure as “Last year’s sponsor”</li>
												<li>List of participants with contact details will be shared</li>
											</ul>
										</div>

									</div>
								</div>


							</div>

							<!--Tab / Lunch-->
							<div class="tab" id="lunch">

								<div class="hour-box active-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn active">
										<h3>The Lunch sponsor gets the following entitlements</h3> <br>
									</div>
									<div class="content-box collapsed">
										<div class="content list-content">
											<ul class="list-item">
												<li>The Lunch sponsor gets the following entitlements</li>
												<li>Acknowledgment during the Inaugural and Valedictory sessions</li>
												<li>Corporate Signage/Logo will be displayed at on-site registration booths and the Stage backdrops</li>
												<li>Logo in Acknowledgement Page of Conference Booklet</li>
												<li>Logo on conference -2019 website with link to sponsor's website</li>

											</ul>

										</div>
									</div>
								</div>

								<div class="hour-box">
									<div class="hour"></div>
									<div class="img-circle circle"><span></span></div>
									<div class="toggle-btn">
										<h3>Post-Event Benefits</h3>
									</div>
									<div class="content-box">
										<div class="content ist-content">
											<ul class="list-item">
												<li>Sponsor’s Logo will be placed in next year’s brochure as “Last year’s sponsor”</li>
												<li>List of participants with contact details will be shared</li>
											</ul>
										</div>

									</div>
								</div>


							</div>



						</div>
						<!--Tabs Box End-->

					</div>
					<!--Schedule Box End-->
				</div>


			</div>
		</div>
	</section>

	@include('user.includes.footer')

	@include('user.includes.script')


</body>

</html>
