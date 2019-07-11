@extends('admin.includes.home')




@section('contents')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Speaker</h2>
            </div>
        </div>
    </div>
</div>

<form action="" method="POST">

    <div class="row">
        <div class="col-md-12">

            <div class="form-group">
                <label for="">Select Type</label>
                <select name="gallerytype" id="gallerytype" class="form-control">
                    <option value="0">Please Select gallery Type</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name Of Image">
            </div>

            <div class="form-group">
                <label for="">Upload Image</label>
                <input type="file" name="avatar" id="avatar" class="form-control">
            </div>
        </div>
    </div>
</form>

@endsection