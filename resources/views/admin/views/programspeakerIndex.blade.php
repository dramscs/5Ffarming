@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Program Speakers</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{route('programspeakers.create')}}"> Add New Program Speaker</a>
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
            <th>Program Detail Name</th>
            <th>Speaker Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($programspeakers as $programspeaker)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $programspeaker->program_details_id }}</td>
            <td>{{ $programspeaker->speaker_id }}</td>
            <td>
         <form action="{{route('programspeakers.destroy',$programspeaker->id)}}" method="POST">

        <a class="btn btn-primary" href="{{route('programspeakers.edit',$programspeaker->id)}}">Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>

            </td>
        </tr>
        @endforeach
    </table>
      </div>