<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.includes.style')
</head>

<body>
    @include('user.includes.header') 
    
    <section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
        <div class="overlay">
            <div class="auto-container">
                <h1>Programs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Programs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    
    <section class="schedule-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="row clearfix">
                            <div class="col-lg-6 pull-left">
                                <h2>All Programs</h2>
                            </div>
                            <div class="col-col-6 pull-right">
                                <a href="#" class="download-btn theme-btn"><span class="fa fa-file-pdf-o"></span> DOWNLOAD .PDF schedule</a>
                            </div>
                        </div>
                    </div>
                    <div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <p>The Program is organized for Practicing Plant breeders, Industry leaders, Crop Science Researchers, Academic faculty and leaders, Farmers/Agriculturists, Opinion leaders and Policy experts, Government officials/Administrators, Marketing & Extension professionals and Students.</p>
                    </div>
                </div>
            </div>
            
            <div class="schedule-box clearfix wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                <ul class="tab-buttons clearfix">
                    <li class="tab-btn active" data-id="#monday"><span class="day">Day 1</span><span class="date">10th Jan</span><span class="curve"></span></li>
                    <li class="tab-btn" data-id="#tuesday"><span class="day">Day 2</span><span class="date">11th Jan</span><span class="curve"></span></li>
                    <li class="tab-btn" data-id="#wednesday"><span class="day">Day 3</span><span class="date">12th Jan</span><span class="curve"></span></li>
                </ul>

                <div class="tabs-box">

                    <div class="tab current" id="monday">

                        <div class="hour-box active-box">
                            <div class="hour">06:30 PM</div>
                            <div class="img-circle circle"><span></span></div>
                            <div class="toggle-btn active">
                                <h3>Indian Agriculture: Challenges & solutions</h3> <br>
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
                                        <h6 class="prof-occup">Chairman PPV & FR Authority</h6>
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
                                        <a href="single-event.html" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span>DETAILS ABOUT THE EVENT</a>
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

                                        <div><h5 class="prof-title">Dr. B.A Chopda</h5>
                                        <h6 class="prof-occup">VC – BAMU, Aurangabad</h6></div>
                                        
                                        <div><h5 class="prof-title common-gap">Mr. Baburao Apparao Kadam</h5>
                                        <h6 class="prof-occup">Vice-President-MGM</h6></div>
                                        

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
                                <h3>Key Note Speaker:Indian Agriculture: challenges & solutions</h3>
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
                                        <h6 class="prof-occup">Chairman PPV & FR Authority</h6>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                                        <h5 class="prof-title">Dr. Autar Mattoo</h5>
                                        <h6 class="prof-occup">Sr Scientist & AAAS Fellow, USDA-ARS</h6>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                <h3>Crop Wide Relatives & Virus resistance to secure farmers income</h3>
                            </div>
                            <div class="content-box">
                                <div class="content">
                                    <p></p>
                                </div>
                                <br>
                                <div class="row professional clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 info">
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                <h3>Mutation Breeding in Flowers & Impact on Farmers Income</h3>
                            </div>
                            <div class="content-box">
                                <div class="content">
                                    <p></p>
                                </div>
                                <br>
                                <div class="row professional clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 info">
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                <h3 class="new-section-gap">Session- 4, Policy, Skill & Infrastructure Development</h3>
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
                                <h3>Journey of Seed industry, current status & future prospective in Indian Context</h3>
                            </div>
                            <div class="content-box collapsed">
                                <div class="content">
                                    <p> </p>
                                </div>
                                <br>
                                <div class="row professional clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 info">
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                                        <h5 class="prof-title">Mr. Suresh Agrawal </h5>
                                        <h6 class="prof-occup">Chairman, BeejSheetal Research Pvt. Ltd, & Kalash Seeds</h6>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                <h3>Improving village infrastructure for better conservation & yields</h3>
                            </div>
                            <div class="content-box">
                                <div class="content">
                                    <p> </p>
                                </div>
                                <br>
                                <div class="row professional clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 info">
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                <h3>Precision Harvesting Machines for Cotton & Horticulture</h3>
                            </div>
                            <div class="content-box">
                                <div class="content">
                                    <p> </p>
                                </div>
                                <br>
                                <div class="row professional clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 info">
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                <h3>Knowledge Transfer to Small Farmers for increased & sustainable Income</h3>
                            </div>
                            <div class="content-box">
                                <div class="content">
                                    <p></p>
                                </div>
                                <br>
                                <div class="row professional clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 info">
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                <h3>Skill development at Graduate & Postgraduate level to help students to be industry ready</h3>
                            </div>
                            <div class="content-box">
                                <div class="content">
                                    <p></p>
                                </div>
                                <br>
                                <div class="row professional clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12 info">
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                                        <h5 class="prof-title">Dr. H Kausadikar </h5>
                                        <h6 class="prof-occup">Director Education & Research, MCAER, Maharashtra</h6>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
                                        <h5 class="prof-title">Mr. Sonu Agrawal</h5>
                                        <h6 class="prof-occup">Founder & MD, WRMS</h6>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                        <figure class="img-circle image"><img class="img-circle" src="images/resource/testi-thumb-1.jpg" alt=""></figure>
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
                                <h3 class="single-session">General Vote of Thanks & National Anthem.
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
    @include('user.includes.footer')

    @include('user.includes.script')


</body>

</html>