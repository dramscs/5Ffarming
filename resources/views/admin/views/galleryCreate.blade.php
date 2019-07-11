@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Gallery</h2>
            </div>
        </div>
    </div>
    <?php $events=DB::table('evn_event_master')->get(); ?>

<form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-xs-12 col-sm-12 col-md-12">
                 <label for="">Event Name</label>
                    <select name='associateid' class="form-control">
                        <option value='0'>-- Select Event --</option>
                            @foreach($events as $event)
                            @if($event->active == 1)
                            <option value='{{ $event->id }}'>{{ $event->eventname }}</option>
                            @endif
                            @endforeach
                    </select>
                </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                        <label>Image</label> 
                        <input type="file" name="imagename" id="imagename" class="form-control">
                    </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <button type="button" class="btn btn-outline-secondary">Cancel</button>
            </div>
        </div>
    </form>
</div>