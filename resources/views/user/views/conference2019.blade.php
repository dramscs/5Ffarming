
<!DOCTYPE html>
<html lang="en">

<head>
	@include('user.includes.style')
</head>
<body>

	<!--header Starts-->
	@include('user.includes.header')

	<!-- Page Banner-->
	<section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
		<div class="overlay">
			<div class="auto-container">
				<h1>Conference 2019</h1>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Conference 2019</li>
					</ol>
				</nav>
			</div>
		</div>
	</section>

	<!-- Main Section -->

	<!--Programs-->

	<section class="schedule-section">
		<div class="auto-container">

			<div class="row clearfix">

				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="sec-title wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
						<h2>Program</h2>
					</div>
					<div class="sec-text wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
						<p>The Program is organized for Practicing Plant breeders, Industry leaders, Crop Science Researchers, Academic faculty and leaders, Farmers/Agriculturists, Opinion leaders and Policy experts, Government officials/Administrators, Marketing &amp; Extension professionals and Students.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12 text-right wow fadeInRight animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInRight;">
					<a href="{{asset('public/user/Uploads/2019_Events/PDF/5ffarming_program.pdf')}}" class="download-btn theme-btn" download><span class="fa fa-file-pdf-o"></span> DOWNLOAD .PDF schedule</a>
				</div>

			</div>

			<!--Schedule Box-->
			<div class="schedule-box clearfix wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">

				<!--Tab Buttons-->
				<ul class="tab-buttons clearfix">
					<li class="tab-btn active" data-id="#monday"><span class="day">Day 1</span><span class="date">10th Jan</span><span class="curve"></span></li>
					<li class="tab-btn" data-id="#tuesday"><span class="day">Day 2</span><span class="date">11th Jan</span><span class="curve"></span></li>
					<li class="tab-btn" data-id="#wednesday"><span class="day">Day 3</span><span class="date">12th Jan</span><span class="curve"></span></li>
				</ul>

				<!--Tabs Box-->
				<div class="tabs-box" style="height:479px;overflow:auto;">

					<!--Tab / Current / Monday-->
					<div class="tab current" id="monday">

						<div class="hour-box active-box">
							<div class="hour">06:30 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn active">
								<h3>Indian Agriculture: Challenges &amp; solutions</h3> <br>
							</div>
							<div class="content-box collapsed">
								<div class="content">
									<p>He started his professional career on 1st October 1986 as Scientist (Plant Breeding) in the ICAR at IARI Regional Station, Tutikandi (Shimla) where he worked on the genetics of rust resistance and breeding for rust resistance in wheat and barley. </p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
										<h5 class="prof-title">Dr. K.Vinod Prabhu</h5>
										<h6 class="prof-occup">Chairman PPV &amp; FR Authority</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">06:30 - 07:30</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">07:30 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Group Dinner @Hotel Vits</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p> </p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">07:30 - 09:30</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>



					</div>

					<!--Tab / Tuesday-->
					<div class="tab" id="tuesday">

						<div class="hour-box">
							<div class="hour">09:30 - 11:00</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="new-section-gap">Session- 1, Inaugaral Session</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="{{asset('single-event')}}" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box active-box">
							<div class="hour">09:30 AM </div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn active">
								<h3>Welcome Speech</h3>
							</div>
							<div class="content-box collapsed">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
										<h5 class="prof-title">Dr. K.K Narayan</h5>
										<h6 class="prof-occup">Chair – Organizing Committee</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">09:30 - 9:40</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">09:40 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Introduction about conference</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
										<h5 class="prof-title">Dr. S.K.Tikoos</h5>
										<h6 class="prof-occup">Speaker</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">09:40 - 9:50</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">09:50 AM </div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Felicitation</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p> </p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

										<h5 class="prof-title">Dr. B.A Chopda</h5>
										<h6 class="prof-occup">VC – BAMU, Aurangabad</h6>


										<h5 class="prof-title common-gap">Mr. Baburao Apparao Kadam</h5>
										<h6 class="prof-occup">Vice-President-MGM</h6>

										<h5 class="prof-title common-gap">Mr. Shri Ram Bhogale</h5>
										<h6 class="prof-occup">President - CMIA</h6>

										<h5 class="prof-title common-gap">Mr. Prashant Belgamwar</h5>
										<h6 class="prof-occup">Business Head, South Asia, Advanta</h6>

										<h5 class="prof-title common-gap">Mr. NK Krishna Kumar</h5>
										<h6 class="prof-occup">India Lead, Biodiversity International</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">09:50 - 10:20</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">10:20 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Key Note Speaker:Indian Agriculture: challenges &amp; solutions</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
										<h5 class="prof-title">Dr. K Vinod Prabhu </h5>
										<h6 class="prof-occup">Chairman PPV &amp; FR Authority</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">10:20 - 10:30</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">10:30 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Doubling of farmer income in Maharashtra: scope and strategy</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
										<h5 class="prof-title">Dr. KP Viswanatha </h5>
										<h6 class="prof-occup">VC – MPKV Rahuri VC- Dr. BSKKV, Dapoli</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">10:30 - 11:00</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">11:00 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Vote Of Thanks</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
										<h5 class="prof-title">Dr. Aparna Tiwari </h5>
										<h6 class="prof-occup">Conference Secretary</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:00 - 11:10</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">11:10 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Tea / Coffe Breaks</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:10 - 11:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">11:30 - 1:30</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="new-section-gap">Session- 2, New Technologies that Augment Crop Breeding</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box">
							<div class="hour">11:30 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Enhancing crop resistance against abiotic stresses alongside nutritional quality Merging genomics and metabolomics</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. Autar Mattoo</h5>
										<h6 class="prof-occup">Sr Scientist &amp; AAAS Fellow, USDA-ARS</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 12:00</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">12:00 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Agricultural innovations: Opportunities and challenges</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. Usha Barwale </h5>
										<h6 class="prof-occup">Director at Mahyco</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">12:00 - 12:15</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">12:15 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Artificial Intelligence, Big Data and Future Farming</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Partha Banerjee</h5>
										<h6 class="prof-occup">Monsanto/Bayer</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">12:15 - 12:30</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">12:30 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Role of Molecular markers in crop improvement for 21st century</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. AK Singh</h5>
										<h6 class="prof-occup">IARI</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">12:30 - 12:45 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">12:45 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Tilling to Genome Editing: Genomics-enabled New Breeding Technologies</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. Sivarama Prasad </h5>
										<h6 class="prof-occup">Agrigenome Lab P Ltd</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">12:45 - 13:00 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">12:45 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Efficiency in Plant breeding: how to integrate new and old tools</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. Stefania Grando</h5>
										<h6 class="prof-occup">ICRISAT (former director)</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">1:00 - 1:15</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">1:20 - 1:30</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Felicitation of the speakers</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">1:30 - 1:40</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Lunch @ Hotel Vits</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">02:30 - 4:30</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="new-section-gap">Session- 3, Nurture to realize Nature’s Potential</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box">
							<div class="hour">12:45 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Field experience in unlocking potential and value creation</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Veeramani Shankar </h5>
										<h6 class="prof-occup">MD-CEO, Rallis</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">2:30 - 3:00</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">03:00 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Crop Wide Relatives &amp; Virus resistance to secure farmers income</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. NK Krishna Kumar</h5>
										<h6 class="prof-occup">India Lead, Biodiversity International</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">3:00 - 3:30</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">03:00 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Quality Forages: Paving the way for dairy management of small scale farmers</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Prabhakar Bandhu </h5>
										<h6 class="prof-occup">Lead, Forage Crop, Advanta</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">3:30 - 3:45</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">03:00 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Sustainable farming model with advanced irrigation system for small farmers</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. Anil V Dhake</h5>
										<h6 class="prof-occup">Jain Irrigation</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">3:45 - 4:00</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">4:00 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Successful Drip Irrigation in Rice – water conservation and high yield</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. V Ravichandran </h5>
										<h6 class="prof-occup">Progressive farmer</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">4:00 - 4:15</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">4:10 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Mutation Breeding in Flowers &amp; Impact on Farmers Income</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. K V Prasad </h5>
										<h6 class="prof-occup">Director ICAR Directorate</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">4:10 - 4:30</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">4:30 - 5:00</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Tea/Coffee break</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">5:00 PM </div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Planetary Talk
									GM Technology infusion in Indian Agriculture Opportunities and Challenge</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. C. D. Mayee </h5>
										<h6 class="prof-occup">Former Chairman of ASRB</h6>


									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">5:00 - 6:00</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">6:00 - 6:10 </div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Felicitation of the speakers
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">7:00 - 9:00 </div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Group dinner @ Hotel Vits
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">
									</div>
								</div>
							</div>
						</div>

					</div>

					<!--Tab / Wednesday-->
					<div class="tab" id="wednesday">

						<div class="hour-box">
							<div class="hour"></div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="new-section-gap">Session- 4, Policy, Skill &amp; Infrastructure Development</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box active-box">
							<div class="hour">09:30 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn active">
								<h3>Journey of Seed industry, current status &amp; future prospective in Indian Context</h3>
							</div>
							<div class="content-box collapsed">
								<div class="content">
									<p> </p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Suresh Agrawal </h5>
										<h6 class="prof-occup">Chairman, BeejSheetal Research Pvt. Ltd, &amp; Kalash Seeds</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">09:30 - 9:45</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">9:45 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Increasing Farmer’s share in Food value chain</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p> </p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Prashant Belgamwar </h5>
										<h6 class="prof-occup">Business Head, South Asia, Advanta Head, South Asia, Advanta</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">9:45 - 10:00</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">10:00 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Improving village infrastructure for better conservation &amp; yields</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p> </p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Popatrao Pawar</h5>
										<h6 class="prof-occup">Progressive Farmer</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">10:00 - 10:15</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">10:00 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Precision Harvesting Machines for Cotton &amp; Horticulture</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p> </p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Manohar Sambandam </h5>
										<h6 class="prof-occup">Green Robot Machinery Pvt Ltd</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">10:15 - 10:30</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">04:00 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Knowledge Transfer to Small Farmers for increased &amp; sustainable Income</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Uddhav Shirsath </h5>
										<h6 class="prof-occup">Manager-Knowledge Transfer-Legal-East West Seeds</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">10:30 - 10:45</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">10:45 - 11:00</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Tea/Coffee break
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box">
							<div class="hour">11:00 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Role of seed industries for improving farmer’s life</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. Nandkumar Kunchge</h5>
										<h6 class="prof-occup">Research Director – BeejSheetal Research Pvt. Ltd</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:00 - 11:15</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">11:15 AM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Skill development at Graduate &amp; Postgraduate level to help students to be industry ready</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. H Kausadikar </h5>
										<h6 class="prof-occup">Director Education &amp; Research, MCAER, Maharashtra</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:15 - 11:30</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">11:30 - 12:30</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Disscussion
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box">
							<div class="hour">1:30 - 2:30</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Lunch @ Hotel Vits
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box">
							<div class="hour">1:30 - 2:30</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Lunch @ Hotel Vits
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>


						<div class="hour-box">
							<div class="hour">2:30 - 3:30</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="new-section-gap">Session- 4, Marketing Challenges for Small Farmers</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>


						<div class="hour-box">
							<div class="hour">2:30 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Securing higher farm income through Crop Insurance</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Sonu Agrawal</h5>
										<h6 class="prof-occup">Founder &amp; MD, WRMS</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">2:30 - 2:50</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">2:50 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Farmers right and their stand in current agriculture</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Dr. M Kachole</h5>
										<h6 class="prof-occup">Research Director –MGMIBT</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">2:50 - 3:00</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">3:00 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Challenges faced by small farmers to market vegetables</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Shriram Gadhave </h5>
										<h6 class="prof-occup">President - Vegetable Grower Association of India</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">3:00 - 3:10</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">3:10 PM</div>
							<div class="img-circle circle"><span></span></div>
							<div class="toggle-btn">
								<h3>Hindrance in Agri-produce markets</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">
										<figure class="img-circle image"><img class="img-circle" src="{{asset('public/user/images/resource/testi-thumb-1.jpg')}}" alt=""></figure>
										<h5 class="prof-title">Mr. Govind Joshi </h5>
										<h6 class="prof-occup">Farmer Representative</h6>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">3:10 - 3:20</a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">3:20 - 3:50</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Disscussion
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box">
							<div class="hour">10 Min</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Felicitation of the speakers
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box">
							<div class="hour">3:50 - 4:00</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Tea/Coffee break
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>


						<div class="hour-box">
							<div class="hour">4:00 - 5:00</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="new-section-gap">Session- 5, Valedictory Session</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>
						</div>

						<div class="hour-box">
							<div class="hour">4:00 - 4:20</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Secretary reads out a report of the conference with recommendations
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box">
							<div class="hour">4:20 - 4:50</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">Closing remarks by members on the dais and then from delegates.
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>

						<div class="hour-box">
							<div class="hour">4:50 - 5:00</div>
							<div class="img-circle circle"><span></span></div>
							<div class="">
								<h3 class="single-session">General Vote of Thanks &amp; National Anthem.
								</h3>
							</div>
							<div class="content-box">
								<div class="content">
									<p></p>
								</div>
								<br>
								<div class="row professional clearfix">
									<div class="col-md-6 col-sm-6 col-xs-12 info">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 text-right">

										<a href="#" class="theme-btn btn-style-one hvr-bounce-to-right dull">11:30 - 1:30 </a>
										<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
									</div>
								</div>
							</div>

						</div>


					</div>



				</div>
				<!--Tabs Box End-->

			</div>
			<!--Schedule Box End-->

		</div>
	</section>



	<!-- Venue -->

	<section class="intro-section" style="background-image:url({{asset('public/user/images/background/hotelVits.png')}});">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="inner-intro-section">
					<div class="col-md-12 gap">
						<h3>The organizing committee has decided on Aurangabad as a first choice to start the series of the conference because</h3>
						<ul class="location-list">
							<li> It is centrally located </li>
							<li>Several seed companies are located in and around Aurangabad </li>
							<li> Rich historical and heritage prospect </li>
							<li>Good climate </li>
							<li>Well connected by rail/road/air </li>
						</ul>
					</div>

					<div class="col-md-12 gap">
						<h2>Venue</h2>
						<label class="hot-title">VITS LUXURY BUSINESS HOTEL, AURANGABAD</label>
						<p class="hot-address">VEDANT NAGAR, RAILWAY STATION ROAD, AURANGABAD, AURANGABAD, MAHARASHTRA 43100</p>
						<span>secretary.conference2019@gmail.com</span>
					</div>



				</div>
			</div>
		</div>
	</section>



	<!-- Speakers-->
	<section class="team-section" id="team">
		<div class="auto-container">

			<div class="sec-title customized wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
				<h2>Meet Our Speakers</h2>
			</div>
			<div class="">
				<div class="team">

					<article class=" team-member wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
						<div class="inner inner-item">
							<div class="card card-inner">
								<img src="http://192.168.1.94/tauqeer/5Ffarming/assets/images/speakers/1.jpg" alt="" title="" style="padding-bottom:30px;">
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
					<article class=" team-member wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
						<div class="inner inner-item">
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
					<article class=" team-member wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
						<div class="inner inner-item">
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
					<article class="team-member wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
						<div class="inner inner-item">
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

					<article class="team-member wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
						<div class="inner inner-item">
							<div class="card card-inner">
								<img src="{{asset('public/user/images/speakers/5.jpg')}}" alt="" title="" style="padding-bottom:30px;">
								<div class="designation-title">
									<h3>Mr. V.Ravicandran</h3>
									<p class="title">Progressive Farmer</p>
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

				</div>
			</div>
		</div>
	</section>

	<!-- Members-->
	<section class="members-main-section members-two-thousand-nineteen" style="padding:60px 0px 60px;margin:60px 0px 60px;">
		<div class="auto-container">
			<div class="sec-title wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
				<h2>Members Of 5F Farming</h2>
			</div>

			<div class="member">

				<div class=" wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/1.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. Sharan Angadi</h3>
								<label>member</label>
								<br>
								<span>Advisor - Ankur Seeds Pvt Ltd</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/2.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. Elcio Perpetuo
									Guimaraes</h3>
								<label>member</label>
								<br>
								<span>R &amp; D Director - Embrapa (Brazil)</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/3.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. Girish Patil</h3>
								<label>member</label>
								<br>
								<span>Manager R &amp; D - East West Seeds India Pvt Ltd.</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/4.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. Arvind
									K. Mishrai</h3>
								<label>member</label>
								<br>
								<span>Co- Founder and Director - ATPBR</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/5.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. Chandrashekhar
									Chaporka</h3>
								<label>member</label>
								<br>
								<span>Advisor - Mahyco</span>
							</div>
						</div>
					</div>

				</div>

				<div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/6.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. Dileep
									Pokle</h3>
								<label>member</label>
								<br>
								<span>Emirtus professor at MGM-IBT</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/7.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. Krishna
									Prasad</h3>
								<label>member</label>
								<br>
								<span>Tierra Seed Science Pvt. Ltd.</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/8.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Mr. Sameer
									Agrawal</h3>
								<label>member</label>
								<br>
								<span>MD - Bejo Sheetal Pvt Ltd.</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/9.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. Sanjay
									Harke</h3>
								<label>member</label>
								<br>
								<span>Director-MGM IBT</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img src="{{asset('public/user/images/members/10.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Mr. Baburao
									Dhokane</h3>
								<label>member</label>
								<br>
								<span>Artist (BAMU)</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img  src="{{asset('public/user/images/members/11.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. Anil
									Bukhtar</h3>
								<label>member</label>
								<br>
								<span>Professor – Vivekanand Collage</span>
							</div>
						</div>
					</div>

				</div>

				<div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img  src="{{asset('public/user/images/members/12.jpg')}}" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Mr. Ravichandran
									Vanchinathan</h3>
								<label>member</label>
								<br>
								<span>Director at Global Farmers Network</span>
							</div>
						</div>
					</div>

				</div>

				<div class=" wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="container-box-main">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-6 col-sm-12 image-box-custom">
								<img class="lazy" data-original="../assets/images/members/13.jpg" alt="">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 infobox">
								<h3>Dr. R.M
									Sundaram</h3>
								<label>member</label>
								<br>
								<span>Principal Scientist (ICAR-IIRR)</span>
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>
	</section>




	<!-- Presentation	-->

	<section class="main-presentation-section" style="padding:0px 0px 60px;">
		<div class="auto-container">
			<div class="sec-title wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
				<h2>Presentation</h2>
			</div>
			<div class="sec-text wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
				<p>Following are the presentations:</p>
			</div>

			<div class="speaker-listing">

				<div class="row professional clearfix list-styling wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Dr. K.Vinod Prabhu</h5>
						<h6 class="prof-occup">Chairman PPV &amp; FR Authority</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right ">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Dr. K. P. Viswanatha </h5>
						<h6 class="prof-occup">Vice Chancellor, Mahatma Phule Krishi Vidyapeeth,Rahuri (Maharashtra)</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">DR. Aurthar K Matto </h5>
						<h6 class="prof-occup">USDA-ARS</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Dr. AK Singh </h5>
						<h6 class="prof-occup">Division of Genetics IARI</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>


				<div class="row professional clearfix list-styling wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Dr. Sivarama Prasad Lekkala </h5>
						<h6 class="prof-occup">PHD Lead Scientist - Agrigenome Labs Pvt Ltd Hyderabad</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">V Shankar </h5>
						<h6 class="prof-occup">Tata Enterprise</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Dr. C L Laxmipathi Gowda </h5>
						<h6 class="prof-occup">Co - Founder GRSV</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Mr. Prabhakar Babu </h5>
						<h6 class="prof-occup">Advanta Seeds</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Dr A V Dhake </h5>
						<h6 class="prof-occup">Jain Irrigation</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">V. Ravichandran </h5>
						<h6 class="prof-occup">Farmer, Tamilnadu</h6>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Dr CD Mayee, President </h5>
						<h6 class="prof-occup">South Asia Biotechnology Centre (SABC)</h6>

					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right ">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">K.K.Narayanan </h5>
						<h6 class="prof-occup">PHD Director, ATPBR</h6>

					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Mr. Prashant Belgamwar</h5>
						<h6 class="prof-occup">Advanta Seeds</h6>

					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Uddhav Shirsath </h5>
						<h6 class="prof-occup">East West Seed</h6>

					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Mr. Manohar Sambandam </h5>
						<h6 class="prof-occup">Green Robot Machinary Pvt Ltd</h6>

					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Mr. Sonu Agrawal </h5>
						<h6 class="prof-occup">Weather Risk Management Services</h6>

					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Dr. Manvendra S Kachole </h5>
						<h6 class="prof-occup">Research Director MGM Institute of Biosciences and Technology</h6>

					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="{{asset('views.user.single-event')}}" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Shriram Gadhave </h5>
						<h6 class="prof-occup">President-VGAI</h6>

					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>

				<div class="row professional clearfix list-styling wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: hidden; animation-duration: 1000ms; animation-delay: 200ms; animation-name: none;">
					<div class="col-md-6 col-sm-6 col-xs-12 info">
						<figure class="img-circle image"><img class="img-circle" src="" alt=""></figure>
						<h5 class="prof-title">Mr. Govind Joshi </h5>
						<h6 class="prof-occup">Executive Chairman, Shetkari Sanghatana Trust, Ambethan</h6>

					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-download"></span>Download</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="" style="padding:0px 0px 60px;">
		<div class="auto-container">
			<div class="sec-title wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
				<h2 style="margin-bottom:40px;">Image Gallery</h2>
			</div>
		</div>
		<div class="container-fluid">

			<div class="row">


				<?php
			
                $files = glob("{{asset('public/user/Uploads/2019_Events/*.jpg')}}");
                for ($i=1; $i<count($files); $i++)
                {
                    $num = $files[$i];
                    echo '<div class="col-md-2" style="padding-right: 5px;padding-left: 5px;"><a class="lazy lazy-event-gallery" data-original="'.$num.'" download><img class="lazy lazy-event-gallery" data-original="'.$num.'" class="event-gallery" style="width:100%;height:100%;"></a></div>';
                }

		     ?>
			</div>
		</div>
	</section>

	<!--Sponsers	-->
	<section class="sponsors" style="padding:0px 0px 60px;margin:0;">
		<div class="auto-container">
			<div class="sec-title sec-customised wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
				<h2 class="text-left">Our Awesome Sponsor's</h2>
			</div>
		</div>
		<div class="container-fluid">

			<ul class="slider">
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Gold Sponser"><img src="public/user/images/sponsors/1.jpg" alt=""></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Bronze Sponser"><img src="public/user/images/sponsors/2.jpg" alt=""></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Bronze Sponser"><img src="public/user/images/sponsors/3.jpg" alt=""></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Lunch Sponser"><img src="public/user/images/sponsors/4.jpg" alt=""></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Lunch Sponser"><img src="public/user/images/sponsors/5.jpg" alt=""></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Special Sponser"><img src="public/user/images/sponsors/6.jpg" alt=""></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Special Sponser"><img src="public/user/images/sponsors/7.jpg" alt=""></a></li>
				<li><a href="#" data-toggle="tooltip" data-placement="top" title="Special Sponser"><img src="public/user/images/sponsors/8.jpg" alt="" title=""></a></li>
			</ul>
		</div>
	</section>

	@include('user.includes.footer')

@include('user.includes.script')

	<script>
		$('.team').owlCarousel({
			loop: true,
			navs: true,
			margin: 30,
			items: 4,
			lazyLoad:true,
			autoplay: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 4
				}
			}
		});

		$('.member').owlCarousel({
			loop: true,
			navs: true,
			margin: 30,
			autoplay: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 2
				}
			}
		});
		
		    $("img.lazy").lazyload();

	</script>

</body>

</html>
