@extends('layouts.admin')
@section('main')
    <div style="margin-left: 250px; margin-top: 40px; padding-right: 400px" >
        <h3 class="text-center">Edit User</h3>
        <form action="{{route('users.update',$user->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp" value="{{$user->address}}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" value="{{$user->phone}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@stop
