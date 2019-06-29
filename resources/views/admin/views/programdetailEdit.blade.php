@extends('admin.includes.structure')
@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Program</h2>
            </div>
        </div>
    </div>
</div>
    @section('section')

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('programdetails.update',$programdetail) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Event Name</label>
                        <select type="text" name="program_id" value="{{ $programdetail->program_id }}" class="form-control" placeholder="Name">
                        <option value="">Select Any One</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Program Title</label>
                        <input type="text" name="title" value="{{ $programdetail->title }}" class="form-control" placeholder="Designation">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Start Time</label>
                        <input type="time" name="starttime" value="{{ $programdetail->starttime }}" class="form-control" placeholder="Designation">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>End Time</label>
                        <input type="time" name="endtime" value="{{ $programdetail->endtime }}" class="form-control" placeholder="Designation">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" value="{{ $programdetail->description }}" class="form-control" placeholder="Designation">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                </div>
            </div>

        </form>
    



@endsection

@section('section')



        @endsection