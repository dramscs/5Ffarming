@extends('admin.includes.structure')
@include('admin.includes.home')

@section('section')
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>All Events</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-outline-success" href="{{ route('event.create') }}"> Add New Event </a>
    </div>
</div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Avatar</th>
            <th>Event Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Venue</th>
            <th width="280px">Action</th>
        </tr>
    </table>
</div>


@endsection