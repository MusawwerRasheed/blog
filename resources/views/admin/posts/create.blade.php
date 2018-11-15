@extends('layouts.admin')


@section('content')

    <h1> <strong>Create Post </strong></h1>



    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}

    {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
{{csrf_field()}}
        </div>


        <div class="form-group">
        {!! Form::Label('category_id','Category') !!}

     {!! Form::select('category_id',[''=>'Choose Category']+$categories,null,['class'=>'form-control'])!!}

            {{csrf_field()}}

        </div>

    <div class="form-group">
    {!! Form::Label('photo_id','Photo') !!}
    {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
   {{csrf_field()}}
    </div>


    <div class="form-group">
    {!! Form::Label('body','Description') !!}
    {!! Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}
   {{csrf_field()}}
    </div>


<div class="form-group">
{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
{{csrf_field()}}
</div>


@include('includes.form-erorr')


    @stop