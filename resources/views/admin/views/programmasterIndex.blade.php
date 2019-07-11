@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Program</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{route('programmasters.create')}}"> Add New Program</a>
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
            <th>Program Title</th>
            <th>Day</th>
            <th>Program Date</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($programmasters as $programmaster)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $programmaster->event_id }}</td>
            <td>{{ $programmaster->program_title }}</td>
            <td>{{ $programmaster->day }}</td>
            <td>{{ $programmaster->program_date }}</td>
            <td>
         <form action="{{route('programmasters.destroy',$programmaster->id)}}" method="POST">
    
    <a class="btn btn-primary" href="{{route('programmasters.edit',$programmaster->id)}}" >Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>

            </td>
        </tr>
        @endforeach
    </table>
      </div>