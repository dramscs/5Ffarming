@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Event Enrollment</h2>
            </div>
        </div>
    </div>
 
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <?php $events=DB::table('evn_event_master')->get(); ?>

    <form action="{{route('enrollments.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <select  name="event_id" class="form-control">
                            <option  value=''>-- Select Event --</option>
                                @foreach ($events as $event)
                                @if($event->active == 1)
                                 <option value='{{$event->id}}'>{{ucwords($event->eventname)}}</option>
                                 @endif                                
                                @endforeach
                        </select>
            </div>
          </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Registration Type</label>
                        <select name="registration_type" class="form-control">
                            <option>-- Select Registration Type --</option>
                            <option value="1">Indian</option>
                            <option value="2">Foreign</option>
                            <option value="3">Students</option>         
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Early</label>
                        <input type="text" name="early" class="form-control" placeholder="Early">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Early Enddate</label>
                        <input type="date" name="early_enddate" id="early_enddate" class="form-control" placeholder="Early Enddate" onchange="validateDate();">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Regular</label>
                        <input type="text" name="regular" class="form-control" placeholder="Regular">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Regular Enddate</label>
                        <input type="date" name="regular_enddate" id="regular_enddate" class="form-control" placeholder=" Regular Enddate" onchange="validateDate();">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Onsite</label>
                        <input type="text" name="onsite" class="form-control" placeholder="Onsite">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Single Day</label>
                        <input type="text" name="single_day" class="form-control" placeholder="Single Day">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                </div>
            </div>
        </form>
</div>

<script>
    
    function validateDate(){        
        var Earlydate = $('#early_enddate').val();
        var RegularDate = $('#regular_enddate').val();
        
        if(Earlydate != '' && RegularDate != ''){            
            if(RegularDate < Earlydate){
                alert('Regular End Date Should be Greater Than Early End Date');
                $('#regular_enddate').val('');
            }
        }else{
            return
        }
    }
    
</script>

