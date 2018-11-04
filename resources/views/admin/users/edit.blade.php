@extends('layouts.admin')

@section('content')

    <h1> Edit User </h1>

    <div class="col-sm-3">

        <img src="{{$user->photo? $user->photo->file:'http://placehod.it/400*400'}}" alt="" class="img-responsive img-rounded">


    </div>
    <br>

    <div class="col-sm-9">
    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
    {{csrf_field()}}


    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::Label('email','Email') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('is_active','Status') !!}
        {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
    </div>





    <div class="form-group">
        {!! Form::Label('role_id','Role') !!}
        {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('password',' Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::Label('photo_id','Photo') !!}
        {!! Form::file('photo_id',['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
    </div>

    </div>


    @include('includes.form-erorr')
@stop