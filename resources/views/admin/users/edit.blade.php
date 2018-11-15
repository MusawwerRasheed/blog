@extends('layouts.admin')

@section('content')

    <h1> <strong>Edit User </strong></h1>


<style>
   #btn-danger{
       height: 75px;
    }
</style>

 <div class="row">



    <div class="col-sm-3"><img src="{{$user->photo? $user->photo->file:'http://placehod.it/400*400'}}" alt="" class="img-responsive img-rounded">
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




    <div  class="form-group">
        {!! Form::submit('Update User',['class'=>'btn btn-primary float-right']) !!}

    </div>

        {!! Form::close() !!}

    </div>




         {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
         <div id="btn-danger" class="form-group">

             {!! Form::submit('Delete user', ['class'=>'btn btn-danger'] )  !!}
{!! Form::close() !!}

         </div>



 </div>

    <div class="row">
        @include('includes.form-erorr')
    </div>



@stop