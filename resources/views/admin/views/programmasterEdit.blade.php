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

    <form action="{{ route('programmasters.update',$programmaster) }}" method="POST">
        @csrf
        @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Event Name</label>
                        <select type="text" name="event_id" value="{{ $programmaster->event_id }}" class="form-control">
                        <option value="">Select Any One</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Program Title</label>
                        <input type="text" name="program_title" value="{{ $programmaster->program_title }}" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Day</label>
                        <input type="text" name="day" value="{{ $programmaster->day }}" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Program Date</label>
                        <input type="date" name="program_date" value="{{ $programmaster->program_date }}" class="form-control">
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