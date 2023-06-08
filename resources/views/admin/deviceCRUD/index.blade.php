@extends('admin.deviceCRUD.layout')
 
@section('content')

<!-- <h2 style="background-color: white;">Check all Devices</h2> -->
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
                
            
           
                <a class="btn btn-success" href="/admin/devices/create"> Create new Device</a>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div  class="alert alert-success" style="margin-top: 60px;">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="margin-top: 50px;">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $blog->name }}</td>
            <td>{{ $blog->description }}</td>
            <td>
                <form action="/admin/devices/destroy/{{$blog->id}}" method="POST">
   
                    <a class="btn btn-info" href="/admin/devices/show/{{$blog->id}}">Show</a>
    
                    <a class="btn btn-primary" href="/admin/devices/edit/{{$blog->id}}">Edit</a>
   
                    @csrf
                    @method('POST')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $blogs->links() !!}
      
@endsection