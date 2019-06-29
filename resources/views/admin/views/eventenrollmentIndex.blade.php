@include('admin.includes.home')

@extends('admin.includes.structure')
 
@section('section')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Event Enrollments</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{ asset('eventenrollments.create') }}"> Add New Event Enrollment</a>
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

        @foreach ($eventenrollments as $eventenrollment)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $eventenrollment->event_id }}</td>
            <td>{{ $eventenrollment->registration_type }}</td>
            <td>{{ $eventenrollment->early }}</td>
            <td>{{ $eventenrollment->early_enddate }}</td>
            <td>{{ $eventenrollment->regular }}</td>
            <td>{{ $eventenrollment->regular_enddate }}</td>
            <td>{{ $eventenrollment->onsite }}</td>
            <td>{{ $eventenrollment->single_day }}</td>
            <td>
         <form action="{{ route('eventenrollments.destroy',$eventenrollment->id) }}" method="POST">
    
    <a class="btn btn-primary" href="{{ route('eventenrollments.edit',$eventenrollment->id) }}">Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>

            </td>
        </tr>
        @endforeach
    </table>
      </div>
      
     

      @endsection
