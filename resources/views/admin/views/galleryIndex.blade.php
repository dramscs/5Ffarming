@include('admin.includes.home')

@extends('admin.includes.structure')
 
@section('section')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Gallary Images</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{ asset('gallery.create') }}"> Add New Gallary</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Associate Type Id</th>
            <th>Associate Id</th>
            <th>Name</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($galleries as $image)
        <tr>
        <td>{{ ++$i }}</td>
            <td>{{ $image->associatetypeid }}</td>
            <td>{{ $image->associateid }}</td>
            <td>{{ $image->name }}</td>
            <td>{{ $image->imagename }}</td>
            <td>
            <form action="{{ asset('galleries.destroy',$image->gallery_id) }}" method="POST">
    
    <a class="btn btn-primary" href="{{ asset('galleries.edit',$image->gallery_id) }}">Edit</a>

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>


            </td>
        </tr>
        @endforeach
    </table>
      </div>
      
     

      @endsection

