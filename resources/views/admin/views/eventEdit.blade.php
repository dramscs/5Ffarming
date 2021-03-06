@include('admin.includes.home')

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Events</h2>
        </div>
    </div>
</div>


<form action="{{route('events.update',$event->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Event Name</label>
                <input type="text" name="eventname"  value="{{$event->eventname}}" class="form-control" placeholder="Event Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="txtdescription" class="form-control" cols="15" rows="5"
                    placeholder="Description">{{$event->description}}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Start Date</label>
                <input type="date" name="startdate" id="startdate" class="form-control" value="{{$event->startdate}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">End Date</label>
                <input type="date" name="enddate" id="enddate" class="form-control" value="{{$event->enddate}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Event Venue</label>
                <input type="text" name="venue" id="venue" class="form-control" placeholder="Event Venue" value="{{$event->venue}}">
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Event Venue</label>
                <input type="file" name="imagename" id="imagename" class="form-control" placeholder="Event Image" value="{{$event->imagename}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <button type="button" class="btn btn-outline-secondary">Cancel</button>
        </div>

    </div>
    <!-- .row close -->

</form>
</div>