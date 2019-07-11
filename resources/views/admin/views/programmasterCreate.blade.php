@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Program</h2>
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
    <?php $events=DB::table('evn_event_master')->get(); ?>

    <form action="{{ route('programmasters.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <select  name='event_id'class="form-control">
                            <option  value=''>-- Select Event --</option>
                                @foreach ($events as $event)
                                @if($event->active == 1)
                                 <option value='{{$event->id}}'>{{ucwords($event->eventname)}}</option>
                                 @endif                                
                                @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Program Title</label>
                        <input type="text" name="program_title" class="form-control" placeholder="Program Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Day</label>
                        <input type="number" name="day" class="form-control" placeholder="Day">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Program Date</label>
                        <input type="date" name="program_date" class="form-control" placeholder="Program Date">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
                    <button type="submit" class="btn btn-outline-primary" onClick="GetSelectedItem('select1');">Submit</button>
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                </div>
            </div>

        </form>