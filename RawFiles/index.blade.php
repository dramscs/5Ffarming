<!DOCTYPE html>
<html>
   <head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
   <body>

     <!-- Department Dropdown -->
     Department : <select id='sel_depart' name='sel_depart' onchange="getEmployee();">
       <option value='0'>-- Select department --</option>
 
       <!-- Read Departments -->
       @foreach($departmentData['data'] as $department)
         <option value='{{ $department->id }}'>{{ $department->eventname }}</option>
       @endforeach

    </select>

    <br><br>
    <!-- Department Employees Dropdown -->
    Employee : <select id='sel_emp' name='sel_emp'>
       <option value='0'>-- Select Employee --</option>
      
    </select>

    <!-- Script -->
    <script type='text/javascript'>

        function getEmployee(){
          alert('TEst');
          var ID =  $('#sel_depart').val();
          $.ajax({
                  url: 'getEmployees/'+ID,
                  type: 'get',
                  dataType: 'json',
                  success: function(result){
                    
                    //console.log(result['data']);
                    var DropDown = "<option value='0'>Select Employee</option>";
                    $.each(result['data'], function (i, d) {
                      console.log(d);
                      DropDown += '<option value="' + d.event_id + '">'+d.program_title+'</option>';
                    });
                    $('#sel_emp').html(DropDown);
                  }
                });
        }
    </script>
  </body>
</html>