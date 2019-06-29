@include('admin.includes.home')
@extends('admin.includes.structure')

@section('section')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Speaker</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{ route('speakers.create') }}"> Add New Speaker</a>
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
                <th>Name</th>
                <th>Designation</th>
                <th>Avatar</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($speakers as $speaker)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $speaker->name }}</td>
                <td>{{ $speaker->designation }}</td>
                <td>
                    @if($speaker->avatar)
                    <img src="{{asset( 'public/images/'. $speaker->avatar ) }}" style="width:100px;height:100px;text-align:center;"/>
                    @else
                    Image Not Found
                    @endif
                </td>
                <td>
                    <form action="{{ route('speakers.destroy',$speaker->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('speakers.edit',$speaker->id) }}">Edit</a>
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