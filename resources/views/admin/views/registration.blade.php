@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Registrations</h2><br>
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
            <th>Event id</th>
            <th>Registration Type</th>
            <th>Event Name</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Occupation</th>
            <th>Single Day</th>
            <th>Price</th>
            <th>Message</th>
        </tr>

        @foreach ($registrations as $registration)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $registration->event_id }}</td>
            <td>{{ $registration->registration_type }}</td>
            <td>{{ $registration->name_title }}</td>
            <td>{{ $registration->first_name }}</td>
            <td>{{ $registration->last_name }}</td>
            <td>{{ $registration->occupation }}</td>
            <td>{{ $registration->single_day }}</td>
            <td>{{ $registration->price }}</td>
            <td>{{ $registration->message }}</td>
            
        </tr>
        @endforeach
    </table>
  
      </div>
