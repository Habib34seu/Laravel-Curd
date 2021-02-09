@extends('welcome')
@section('content') 
    <div>
      <a href="/user-create" class="btn btn-primary">Add new User</a>
    </div>
    

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th style="width:80px;">Id</th>
                <th>Name</th>
                <th>Email</th>
                <th style="width:200px;">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($user as $i )
                  <tr>
                      <td style="width:80px;">{{$i->id}}</td>
                      <td>{{$i->name}}</td>
                      <td>{{$i->email}}</td>
                      <td style="width:200px;">
                      <a href="{{route('user.edit', $i->id)}}" class="btn btn-primary">Edit</a>
                      <form class ="form-group pull-right"action="{{route('user.destroy', $i->id)}}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                           <!-- <input type ='submit' class="btn btn-danger"/> -->
                        </form>
                      </td>  
                  </tr>
             @endforeach
            </tbody>
        </table>
    </div>
@endsection