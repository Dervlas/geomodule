@extends('errors.layout')

@php
	$error_number = 500;
@endphp

@section('title')
	Дело не в тебе, дело во мне.
@endsection

@section('description')
	@php
	  $default_error_message = "Произошла внутренняя ошибка сервера. Если ошибка повторяется, пожалуйста, свяжитесь с командой разработчиков.";
	@endphp
	{!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection