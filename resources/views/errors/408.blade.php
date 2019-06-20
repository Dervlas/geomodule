@extends('errors.layout')

@php
  $error_number = 408;
@endphp

@section('title')
  Время запроса истекло.
@endsection

@section('description')
  @php
    $default_error_message = "Пожалуйста вернитесь <a href='javascript:history.back()''>назад</a>, перезагрузите страницу и попробуйте снова.";

  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection