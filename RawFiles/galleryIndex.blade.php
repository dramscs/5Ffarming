@extends('admin.includes.home')


@section('contents')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Common Gallery</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{ route('commongallery.create') }}"> Add New gallery</a>
            </div>
        </div>
    </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>Associate Type Id</th>
            <th>Associate Id</th>
            <th>Name</th>
            <th>Image</th>
        </tr>

          

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>

          
    </table>



</div>
@endsection