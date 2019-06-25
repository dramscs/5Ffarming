
@extends('admin.includes.structure')
@include('admin.includes.home')

@section('section')
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>All Programs</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-outline-success" href="{{route('programs.create')}}"> Add New Program </a>
    </div>
</div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Sr No</th>
                <th>Program title</th>
                <th>Program Day</th>
                <th>Program Date</th>
                <th>Program Heading</th>
                <th>Description</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Action</th>
            </tr>
        </table>
    </div>
</div>




@endsection