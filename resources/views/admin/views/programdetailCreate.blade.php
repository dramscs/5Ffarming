@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Program Detail</h2>
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
    
    <?php $programs=DB::table('evn_program_master')->get(); ?>

    <form action="{{ route('programdetails.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <select  name='program_id'class="form-control">
                            <option  value=''>-- Select Program --</option>
                                @foreach ($programs as $program)
                                @if($program->active == 1)
                                 <option value='{{$program->id}}'>{{ucwords($program->program_title)}}</option>
                                @endif
                                @endforeach
                        </select>
                         </div>
                </div>

               
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Program Session Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Program Session Title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Start Time</label>
                        <input type="time" name="starttime" class="form-control" placeholder="Start Time">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>End Time</label>
                        <input type="time" name="endtime" class="form-control" placeholder="End Time">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                </div>
            </div>

        </form>
    </div>