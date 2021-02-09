@extends('welcome')
@section('content') 
<div class="container">
    <form action="{{route('user.update',$user->id)}}" method ="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"> Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" 
                name ="name" id="name" 
                value="{{$user->name}}"
                placeholder=" Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"> Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" value="{{$user->email}}" name ="email" id="email" placeholder=" Email">
            </div>
        </div>
        
        <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"> </label>
        <div class="col-sm-6">
        <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
        </div>
        </div>
    </form>
</div>
@endsection