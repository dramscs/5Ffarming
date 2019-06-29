@extends('admin.includes.structure')
@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Event Enrollment</h2>
            </div>
        </div>
    </div>
</div>
    @section('section')

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

    <form action="{{ route('eventenrollments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                  <select id='sel_depart' name='event_id'class="form-control">
       <option  value=''>-- Select Event --</option>
                   @foreach($departmentData['data'] as $department)
             <option value='{{ $department->id }}'>{{ $department->eventname }}</option>
           @endforeach

    </select>
                         </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Registration Type</label>
                        <select id='sel_depart' name='event_id'class="form-control">
       <option  value=''>-- Select Registration Type --</option>
             <option value='1'>Indian</option>
             <option value='1'>Foreign</option>
             <option value='1'>Students</option>
         
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
                        <input type="date" name="early_enddate" class="form-control" placeholder="Early Enddate">
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
                        <input type="date" name="regular_enddate" class="form-control" placeholder=" Regular Enddate">
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
                    <button type="submit" class="btn btn-outline-primary" onClick="GetSelectedItem('select1');">Submit</button>
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                </div>
            </div>

        </form>

        <script type='text/javascript'>

$(document).ready(function(){

  // Department Change
  $('#sel_depart').change(function(){

     // Department id
     var id = $(this).val();

     // Empty the dropdown
     $('#sel_emp').find('option').not(':first').remove();

     // AJAX request 
     $.ajax({
       url: 'getEmployees/'+id,
       type: 'get',
       dataType: 'json',
       success: function(response){

         var len = 0;
         if(response['data'] != null){
           len = response['data'].length;
         }

         if(len > 0){
           // Read data and create <option >
           for(var i=0; i<len; i++){

             var id = response['data'][i].id;
             var name = response['data'][i].name;

             var option = "<option value='"+id+"'>"+name+"</option>"; 

             $("#sel_emp").append(option); 
           }
         }

       }
    });
  });

});

</script>


@endsection




       