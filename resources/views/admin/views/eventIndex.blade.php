@include('admin.includes.home')

<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Events</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-outline-success" href="{{route('events.create')}}"> Add New Event </a>
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
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Venue</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($events as $event)

        <tr>
            <td>{{++$i}}</td>
            <td>{{$event->eventname}}</td>
            <td>{{$event->description}}</td>
            <td>{{$event->startdate}}</td>
            <td>{{$event->enddate}}</td>
            <td>{{$event->venue}}</td>
            <td>
                @if($event->imagename)
                <img src="{{asset( 'public/images/'. $event->imagename)}}" style="width:100px;height:100px;text-align:center;" />
                @else
                Image Not Found
                @endif
            </td>
            <td>
                <form action="{{route('events.destroy',$event->id)}}" method="POST">
                    <a class="btn btn-primary" href="{{route('events.edit',$event->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>