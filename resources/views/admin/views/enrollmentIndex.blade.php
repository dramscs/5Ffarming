@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Event Enrollments</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{route('enrollments.create')}}"> Add New Event Enrollment</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Event Name</th>
            <th>Registration Type</th>
            <th>Early</th>
            <th>Early Enddate</th>
            <th>Regular</th>
            <th>Regular Enddate</th>
            <th>Onsite</th>
            <th>Single Day</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($enrollments as $enrollment)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $enrollment->event_id }}</td>
            <td>{{ $enrollment->registration_type }}</td>
            <td>{{ $enrollment->early }}</td>
            <td>{{ $enrollment->early_enddate }}</td>
            <td>{{ $enrollment->regular }}</td>
            <td>{{ $enrollment->regular_enddate }}</td>
            <td>{{ $enrollment->onsite }}</td>
            <td>{{ $enrollment->single_day }}</td>
            <td>
         <form action="{{ route('enrollments.destroy',$enrollment->id) }}" method="POST">
    
    <a class="btn btn-primary" href="{{ route('enrollments.edit',$enrollment->id) }}">Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>

            </td>
        </tr>
        @endforeach
    </table>
      </div>
      
   
