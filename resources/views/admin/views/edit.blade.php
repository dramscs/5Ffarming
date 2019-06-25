@include('admin.includes.home')
   
<div class="container">
    <div class="row" style="padding-top:80px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Speaker</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ asset('views.index') }}"> Back</a>
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
  
    <form action="{{ route('speakers.update',$speaker->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $speaker->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Designation</label>
                    <textarea class="form-control" style="height:150px" name="designation" placeholder="Designation">{{ $speaker->designation }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Avatar</label>
                   <input type="file" name="avatar" id="avatar" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
</div>