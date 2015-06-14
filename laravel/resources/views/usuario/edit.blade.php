@extends('layouts.admin')
@section('content')
	{!!Form::model($user,['route'=> ['usuario.update',$user->id],'method'=>'PUT'])!!}
		@include('usuario.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop