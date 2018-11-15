@extends('layouts.admin')

@section('content')

    <div class="card-header" style="margin: 0 auto;
width:400px; ">
        <h1><strong> Create User </strong></h1>
    </div>

    <br>

    <div class="card-body"  style="  width: 80% ; margin: 0 auto;
">
        {{csrf_field()}}


        <div class="col-sm-9">
    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

{{csrf_field()}}
    <div class="form-group " >
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
        {{csrf_field()}}
    </div>

            {{csrf_field()}}
    <div class="form-group">
    {!! Form::Label('email','Email') !!}
    {!! Form::email('email',null,['class'=>'form-control']) !!}
        {{csrf_field()}}
    </div>

<div class="form-group">
{!! Form::Label('is_active','Status') !!}
{!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control']) !!}
    {{csrf_field()}}
</div>


            {{csrf_field()}}
<div class="form-group">
{!! Form::Label('role_id','Role') !!}

{!! Form::select('role_id',[''=>'Choose option']+$roles,null,['class'=>'form-control']) !!}
    {{csrf_field()}}

</div>

    <div class="form-group">
    {!! Form::Label('password',' Password') !!}
    {!! Form::password('password',['class'=>'form-control']) !!}
        {{csrf_field()}}
    </div>

    <div class="form-group">
    {!! Form::Label('photo_id','Photo') !!}
    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        {{csrf_field()}}
    </div>

            <br>

    <div class="form-group">
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
        {{csrf_field()}}
    </div>
</div>
        {{csrf_field()}}
    </div>
<div class="row">
    @include('includes.form-erorr')
</div>

    {{csrf_field()}}
@stop