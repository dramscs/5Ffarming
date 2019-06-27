@extends('admin.includes.structure')
@include('admin.includes.home')

@section('section')
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>All Events</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-outline-success" href="{{ route('events.create') }}"> Add New Event </a>
    </div>
</div>
</div>

<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
</div>



<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Event Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Venue</th>
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
            <td colspan="2">
                <div style="display:flex;flex-wrap:wrap;justify-content:center;margin:0px 10px;">
                    <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>
                    <form action="{{route('events.destroy',$event->id)}}" method="POST">
                    @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </td>

        </tr>


        @endforeach
    </table>
</div>


@endsection