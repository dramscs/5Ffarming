@include('admin.includes.home')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Gallary Images</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-success" href="{{route('gallery.create')}}"> Add New Gallary</a>
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
            <th>Event Name</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($galleries as $image)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $image->associateid }}</td>
            <td>
                @if($image->imagename)
                <img src="{{asset( 'public/images/'. $image->imagename)}}" style="width:100px;height:100px;text-align:center;" />
                @else
                Image Not Found
                @endif
            </td>
            <td>
                <form action="{{route('gallery.destroy',$image->id)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>