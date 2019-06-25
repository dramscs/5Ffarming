@include('admin.includes.home')
  
<div class="container">
<div class="row" style="padding-top:80px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Speaker</h2>
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
   
<form action="{{ route('speakers.store') }}" method="POST" enctype="multipart/formdata">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Designation</label>
                <input type="text" name="designation" class="form-control" placeholder="Designation">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Image</label> <br />
                <input type="file" name="avtar" id="">
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <button type="button" class="btn btn-outline-secondary">Cancel</button>
        </div>
    </div>
   
</form>
</div>

