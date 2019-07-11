@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Program Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{route('programdetails.create')}}"> Add New Program Detail</a>
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
            <th>Program Title</th>
            <th>Title</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($programdetails as $programdetail)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $programdetail->program_id }}</td>
            <td>{{ $programdetail->title }}</td>
            <td>{{ $programdetail->starttime }}</td>
            <td>{{ $programdetail->endtime }}</td>
            <td>{{ $programdetail->description }}</td>

            <td>
         <form action="{{ route('programdetails.destroy',$programdetail->id) }}" method="POST">
    
         <a class="btn btn-primary" href="{{ route('programspeakers.index',$programdetail->id) }}">Add Speaker</a>

        <a class="btn btn-primary" href="{{ route('programdetails.edit',$programdetail->id) }}">Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>

            </td>
        </tr>
        @endforeach
    </table>
      </div>
