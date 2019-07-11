@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Program Speaker</h2>
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
    <?php $programdetails=DB::table('evn_program_details')->get(); ?>

    <?php $programspeakers=DB::table('cmn_speakers')->get(); ?>

    <form action="{{ route('programspeakers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
         
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Program Detail Name</label>
                         <select  name='program_details_id'class="form-control">
                            <option  value=''>-- Select Program --</option>
                                @foreach ($programdetails as $programdetail )
                                @if($programdetail->active == 1)
                                 <option value='{{$programdetail->id}}'>{{ucwords($programdetail->title)}}</option>
                                @endif
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Program Speaker Name</label>
                        <select  name='speaker_id'class="form-control">
                            <option  value=''>-- Select Program --</option>
                                @foreach ($programspeakers as $programspeaker )
                                @if($programspeaker->active == 1)
                                 <option value='{{$programspeaker->id}}'>{{ucwords($programspeaker->name)}}</option>
                               @endif
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                    <button type="button" class="btn btn-outline-secondary">Cancel</button>
                </div>
            </div>

        </form>
        </div>