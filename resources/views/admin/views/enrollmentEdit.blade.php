@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Event Enrollment</h2>
            </div>
        </div>
    </div>
   
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

    <form action="{{ route('enrollments.update',$enrollment) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" name="event_id" value="{{ $enrollment->event_id }}" class="form-control" placeholder="Registration Type">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Registration Type</label>
                        <input type="text" name="registration_type" value="{{ $enrollment->registration_type }}" class="form-control" placeholder="Registration Type">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Early</label>
                        <input type="text" name="early" value="{{ $enrollment->early }}" class="form-control" placeholder="Early">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Early Enddate</label>
                        <input type="date" name="early_enddate" value="{{ $enrollment->early_enddate }}" class="form-control" placeholder="Early Enddate">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Regular</label>
                        <input type="text" name="regular" value="{{ $enrollment->regular }}" class="form-control" placeholder="Regular">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Regular Enddate</label>
                        <input type="date" name="regular_enddate" value="{{ $enrollment->regular_enddate }}" class="form-control" placeholder=" Regular Enddate">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Onsite</label>
                        <input type="text" name="onsite" value="{{ $enrollment->onsite }}" class="form-control" placeholder="Onsite">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Single Day</label>
                        <input type="text" name="single_day" value="{{ $enrollment->single_day }}" class="form-control" placeholder="Single Day">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                </div>
            </div>

        </form>
</div>
    