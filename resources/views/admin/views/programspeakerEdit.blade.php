@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Program Speaker</h2>
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

    <form action="{{ route('programspeakers.update',$programspeaker) }}" method="POST">
        @csrf
        @method('PUT')

            <div class="row">
         
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Program Detail Name</label>
                        <select  name='program_details_id'class="form-control">
                            <option  value=''>-- Select Program --</option>
                                @foreach ($programdetails as $programdetail)
                                @if($programdetail->active == 1)
                                 <option value='{{$programdetail->id}}'@if($programspeaker->program_details_id==$programdetail->id) selected @endif>{{ucwords($programdetail->title)}}</option>
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
                                @foreach ($programspeakers as $speaker )
                                @if($speaker->active == 1)
                                 <option value='{{$programspeaker->id}}'@if($programspeaker->speaker_id==$speaker->id) selected @endif>{{ucwords($speaker->name)}}</option>
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
