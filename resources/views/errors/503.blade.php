@extends('errors.layout')

@php
  $error_number = 503;
@endphp

@section('title')
  Дело не в тебе, дело во мне.
@endsection

@section('description')
  @php
    $default_error_message = "Сервер перегружен или отключен для обслуживания. Пожалуйста, повторите попытку позже.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection
