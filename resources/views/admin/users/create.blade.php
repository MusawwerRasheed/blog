@extends('layouts.admin')

@section('content')

    <h1> Create User </h1>

    <br>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

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
{!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control']) !!}
</div>





<div class="form-group">
{!! Form::Label('role_id','Role') !!}
{!! Form::select('role_id',[''=>'Choose option']+$roles,null,['class'=>'form-control']) !!}
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
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
    </div>


    @include('includes.form-erorr')
@stop