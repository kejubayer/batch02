@extends('layouts.admin')

@section('main')
    <div style="margin-left: 250px; margin-top: 40px; padding-right: 400px">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">{{$user->name}}</li>
            <li class="list-group-item">Email: {{$user->email}}</li>
            <li class="list-group-item">Phone: {{$user->phone}}</li>
            <li class="list-group-item">Address: {{$user->address}}</li>
        </ul>
        <a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Edit</a>
    </div>
@stop
