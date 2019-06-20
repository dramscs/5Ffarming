
@include('includes.home')

<div class="container">
    <div class="row" style="padding-top:100px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Speakers</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ asset('create') }}"> Add New Speaker</a>
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
            <th>Dsesignation</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($speakers as $speaker)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $speakers->name }}</td>
            <td>{{ $speakers->designation }}</td>
            <td>
                <form action="{{ route('speakers.destroy',$speakers->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('speakers.edit',$speakers->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $speakers->links() !!}
     </div> 

     