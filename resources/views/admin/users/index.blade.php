@extends('layouts.admin')



@section('content')

    <h1><strong>Users</strong> </h1>

    <table class="table" >
        {{csrf_field()}}

        <thead>

        <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col"> Role </th>
            <th scope="col">Status</th>
            <th scope="col"> Created </th>
            <th scope="col"> Updated</th>
        </tr>
        </thead>
        <tbody>
        {{csrf_field()}}

        @if($users)

            @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td> <img height="50" src="{{$user->photo?$user->photo->file:'no photo for user'}} " alt=""></td>
            <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role? $user->role->name:'no role'}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach

@endif

        </tbody>
    </table>


@stop