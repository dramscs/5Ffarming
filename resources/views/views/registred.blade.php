@include('includes.home')
 

<div class="container">
    <div class="row" style="padding-top:80px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>App Speaker</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('speakers.create') }}"> Add New Speaker</a>
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Occupation</th>
            <th>Single Day</th>
            <th>Price</th>
            <th>Message</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($speakers as $speaker)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $speaker->registration_id }}</td>
            <td>{{ $speaker->event_id }}</td>
            <td>{{ $speaker->registration_type }}</td>
            <td>{{ $speaker->name_title }}</td>
            <td>{{ $speaker->first_name }}</td>
            <td>{{ $speaker->last_name }}</td>
            <td>{{ $speaker->occupation }}</td>
            <td>{{ $speaker->price }}</td>
            <td>{{ $speaker->message }}</td>
            <td>
         <form action="{{ route('speakers.destroy',$speaker->id) }}" method="POST">
    
    <a class="btn btn-primary" href="{{ route('speakers.edit',$speaker->id) }}">Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>

            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $speakers->links() !!}
      </div>
