<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.includes.style')
</head>

<body>
    <input type="hidden" name="txtamount" id="txtamount">
    <input type="hidden" name="eventFee" id="eventFee">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="fees-section">
                        <div class="table-responsive">
                            <table class="table table-bordered tbl-fees">
                                <thead>
                                    <tr>
                                        <th>Registration Type</th>
                                        <th>Early Bird Rate</th>
                                        <th>Regular Rate</th>
                                        <th>On site*</th>
                                        <th>Single Day</th>

                                    </tr>
                                </thead>
                                <tbody id="EventsEnroll"></tbody>
                            </table>
                        </div>

                        <div class="sec-text single-tbl-item wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInUp;">
                            <p><span class="emphasized-text">Registration for a single day</span> is also available at the site.</p>
                        </div>

                        <!--<div class="table-responsive">
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
						</div>-->

                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <form action="" method="get">
                       @csrf
                        <div class="row clearfix light-bg" style="padding:10px">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Events </label>
                                <select name="ddlEvents" id="ddlEvents" class="form-control" onchange="GetEventEnrollment(value);">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="">Registration Type</label>
                                <select name="ddltype" id="ddltype" class="form-control" onchange="onGetEventFee();">
                                    <option value="0">Select Registration Type</option>
                                    <option value="1">Indian</option>
                                    <option value="2">Foreign</option>
                                    <option value="3">Student</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <label for="">Package Type</label>
                                <select name="ddlPackage" id="ddlPackage" class="form-control" onchange="onSellectPackage(value)">
                                    <option value="0">Select Package Type</option>
                                    <option value="1">Full Package</option>
                                    <option value="2">Single Day</option>                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Select Title</label>
                                <select name="ddltitle" id="ddltitle" class="form-control">
                                    <option value="0">Select Title</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Mrs">Mrs</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="txtfirstname" id="txtfirstname" class="form-control" placeholder="First Name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="txtlastname" id="txtlastname" class="form-control" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Company / University</label>
                                <input type="text" name="txtlastname" id="txtlastname" class="form-control" placeholder="Company / University Name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="txtemail" id="txtemail" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Mobile No</label>
                                <input type="number" name="txtmobileno" id="txtmobileno" class="form-control" placeholder="Mobile No">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="txtaddress" id="txtaddress" class="form-control" placeholder="Address">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Zip / Postal Code</label>
                                <input type="number" name="txtzipcode" id="txtzipcode" class="form-control" placeholder="Zip / Postal Code">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" name="txtcity" id="txtcity" class="form-control" placeholder="City">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Province</label>
                                <input type="text" name="txtprovince" id="txtprovince" class="form-control" placeholder="Province">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Country</label>
                                <input type="text" name="txtCountry" id="txtCountry" class="form-control" placeholder="Country">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Fee Amount</label> <br>
                                <span id="FeeAmount" class="feesamount">0</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group" style="margin: 12px 0px">
                                <button type="button" class="btn btn-success btn-EventRegistration">Submit</button>
                            </div>

                        </div>


                    </div>   
                   </form>
                    
                </div>
            </div>
        </div>

    </section>

    @include('user.includes.footer')

    @include('user.includes.script')


    <script type="application/javascript">
        var ResultFeeAmount = '';
        $(function() {
            BindDropDown();
        })
        
        function BindDropDown() {
            $.ajax({
                url: 'bindDropDown',
                type: 'get',
                dataType: 'json',
                success: function(result) {
                    var DropDown = '<option value="0">Select Event</option>';
                    if (result.length > 0) {
                        console.log(result);
                        $.each(result, function(i, d) {
                            DropDown += '<option value="' + d.id + '">' + d.eventname + '</option>';
                        });
                        $('#ddlEvents').html(DropDown);
                    }
                }
            });
        }
        
        function onGetEventFee() {
            $.ajax({
                url: 'EventFee',
                type: 'post',                
                dataType: 'json',
                data : { 
                    _token: "{{ csrf_token() }}",
                    EventID : $('#ddlEvents').val(),
                    RegistrationType : $('#ddltype').val()
                },
                success: function(result) {
                    var DropDown = '<option value="0">Select Event</option>';
                    if (result.length > 0) { 
                        ResultFeeAmount = result[0];
                        
                    }
                }
            });
        }
        
        function onSellectPackage(ID){  
            
            if(ID == 1){
                $('#FeeAmount').html(ResultFeeAmount.FeeAmount);
            
            }else if(ID == 2) {
                $('#FeeAmount').html(ResultFeeAmount.single_day);
            
            }
        }
        
        function GetEventEnrollment(ID) {

            $.ajax({
                url: 'getEventRegistration/' + ID,
                type: 'get',
                dataType: 'json',
                success: function(result) {
                    var EventsEnroll = '';
                    if (result.length > 0) {
                        console.log(result);

                        $.each(result, function(i, d) {

                            EventsEnroll += '<tr><td>' + d.RegistrationType + '</td>' +
                                '<td>' + d.early + '</td>' +
                                '<td>' + d.regular + '</td>' +
                                '<td>' + d.onsite + '</td>' +
                                '<td>' + d.single_day + '</td></tr>';

                        });
                        $('#EventsEnroll').html(EventsEnroll);
                    }
                }
            });
        }

    </script>
</body>

</html>
