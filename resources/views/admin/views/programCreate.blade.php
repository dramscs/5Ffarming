@extends('admin.includes.structure')
@include('admin.includes.home')


@section('section')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a href="{{route('programs.index')}}" class="btn btn-outline-dark mb-4"><i class="fa fa-long-arrow-left"></i> Back</a>
            <h2>Add Program</h2>
        </div>
    </div>

</div>

<form action="{{ route('programs.store') }}" method="POST" enctype="multipart/formdata">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Program Title</label>
                <input type="text" name="txtprogramtitle" class="form-control" placeholder="Program Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Program Day</label>
                <input type="text" name="txtprogramday" id="txtprogramday" class="form-control" placeholder="Program Day">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Program Date</label>
                <input type="date" name="txtprogramdate" id="txtprogramdate" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Program Session Name</label>
                <input type="text" name="txtprogramheading" id="txtprogramheading" class="form-control" placeholder="Program Heading">
            </div>
        </div>

       

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="">Start Date</label>
                <input type="date" name="txtstartdate" id="txtstartdate" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="">End Date</label>
                <input type="date" name="txtenddate" id="txtenddate" class="form-control">
            </div>
        </div>     

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="txtdescription" id="txtdescription" class="form-control" cols="15" rows="5"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-3 button-group" style="padding-bottom:30px;margin-bottom:30px;">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
            <button type="button" class="btn btn-outline-secondary">Cancel</button>
        </div>

    </div>
    <!-- .row close -->
</form>

@endsection