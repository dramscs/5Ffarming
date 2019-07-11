@include('admin.includes.home')

<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>All Events</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('events.create') }}"> Add New Event </a>
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


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Events</h2>
        </div>
    </div>

</div>


<form action="" method="POST" enctype="multipart/formdata">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Event Name</label>
                <input type="text" name="txteventname" class="form-control" placeholder="Event Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="txtdescription" id="txtdescription" class="form-control" cols="15" rows="5"
                    placeholder="Description"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Start Date</label>
                <input type="date" name="txtstartdate" id="txtstartdate" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">End Date</label>
                <input type="date" name="txtenddate" id="txtenddate" class="form-control">
            </div>
        </div>     

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Event Venue</label>
                <input type="text" name="txtvenue" id="txtvenue" class="form-control" placeholder="Event Venue">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Upload Image</label>
                <div class="custom-file">
                    <input type="file" name="txtavtar" class="custom-file-input" id="customFileLang" lang="es">
                    <span class="custom-file-label" for="customFileLang">Choose File</span>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <button type="button" class="btn btn-outline-secondary">Cancel</button>
        </div>

    </div>
    <!-- .row close -->

</form>

@endsection