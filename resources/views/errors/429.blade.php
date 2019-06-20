@extends('errors.layout')

@php
  $error_number = 429;
@endphp

@section('title')
  Превышено количество запросов.
@endsection

@section('description')
  @php
    $default_error_message = "Пожалуйста вернитесь <a href='javascript:history.back()''>назад</a> и попробуйте снова, или перейдите на <a href='".url('')."'>главную страницу</a>.";
  @endphp
  {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection