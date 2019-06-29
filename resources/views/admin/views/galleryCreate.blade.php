@extends('admin.includes.home')

@section('contents')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Gallery</h2>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                 <label for="">Event Name</label>

<select id='sel_depart' name='associatetypeid' class="form-control" onchange="getEmployee();">
       <option value='0'>-- Select department --</option>
 
       @foreach($departmentData['data'] as $department)
         <option value='{{ $department->id }}'>{{ $department->eventname }}</option>
       @endforeach

    </select>

                </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Program Name</label>
                    <select id='sel_emp' name='associateid' class="form-control">
                        <option value='0'>-- Select Program --</option>
                    </select>
            </div>    
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Name</label>
                <input type="text" name="imagename" id="name" class="form-control" placeholder="Name Of Image">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Upload Image</label>
                <input type="file" name="imagename" id="avatar" class="form-control">
            </div>
     
    <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                </div>
                </div>
</form>


<script type='text/javascript'>

function getEmployee(){

  var ID =  $('#sel_depart').val();
  $.ajax({
          url: 'getEmployees/'+ID,
          type: 'get',
          dataType: 'json',
          success: function(result){
            
            var DropDown = "<option value='0'>Select Employee</option>";
            $.each(result['data'], function (i, d) {
              console.log(d);
              DropDown += '<option value="' + d.id + '">'+d.program_title+'</option>';
            });
            $('#sel_emp').html(DropDown);
          }
        });
}
</script>

@endsection