@extends('layout.main')

@section('header')

@stop
@section('content')
<form action="{{ action('RemindersController@postRemind') }}" method="POST">
    <input type="email" name="email">
    <input type="submit" value="Send Reminder">
</form>
@stop