@extends('layouts.admin')

@section('content')


<h1 ><strong> Posts</strong></h1>

<br>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"> Owner </th>
          <th scope="col">Category</th>
          <th scope="col">Photo</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>


        </tr>
      </thead>
      <tbody>
      @if($posts)
          @foreach($posts as $post)
      <tr>
          <td> {{$post->id}}</td>
          <td>{{$post->user_id? $post->user->name:' name not given'}}</td>
          <td>{{$post->category_id? $post->category->name:'not defined'}}</td>
          <td><img src="{{$post->photo_id? $post->photo->file:'no photo'}}" height="50px" alt=""> </td>
          <td>{{$post->title}}</td>
          <td>{{$post->body}}</td>
          <td>{{$post->created_at->diffForhumans()}}</td>
          <td>{{$post->updated_at->diffForhumans()}}</td>


        </tr>
      @endforeach
@endif
      </tbody>
    </table>

    @stop