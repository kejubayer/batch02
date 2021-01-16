@extends('layouts.admin')

@section('main')
    <div style="margin-left: 250px; margin-top: 40px; padding-right: 400px">
        <a href="{{route('users.create')}}">Add User</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$user)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <a href="{{route('users.show',$user->id)}}" class="btn btn-success">Show</a>
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Edit</a>
                    {{--<form action="{{route('users.destroy',$user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>--}}
                    <a href="{{route('users.delete',$user->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
