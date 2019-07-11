@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Program</h2>
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

    <form action="{{route('programmasters.update',$programmaster->id)}}" method="POST">
        @csrf
        @method('PUT')
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <select  name='event_id'class="form-control">
                            <option  value=''>-- Select Event --</option>
                                @foreach ($events as $event )
                                     @if($event->active == 1)
                                 <option value='{{$event->id}}' @if($event->id==$event->id) selected @endif>{{ucwords($event->eventname)}}</option>
                                @endif
                                @endforeach
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
                        <input type="number" name="day" value="{{ $programmaster->day }}" class="form-control">
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