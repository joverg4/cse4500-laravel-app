@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar Events</h1>
@stop

@section('content')
<form method="post" action="{{ route('events.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="startTime" type="datetime-local" label="Start" />
    <x-adminlte-input name="endTIme" type="datetime-local" label="Finish" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop