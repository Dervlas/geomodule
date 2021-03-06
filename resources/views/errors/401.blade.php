@extends('errors.layout')

@php
  $error_number = 401;
@endphp

@section('title')
  Неавторизованный запрос.
@endsection

@section('description')
  @php
    $default_error_message = "Пожалуйста вернитесь <a href='javascript:history.back()''>назад</a> или перейдите на <a href='".url('')."'>главную страницу</a>.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection