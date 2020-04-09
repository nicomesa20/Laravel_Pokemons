@extends('layouts.app')

@section('title','trainerscreate')

@section('content')
    @include('common.errors')
    <form action="/trainers" class="form-group" method="POST" enctype="multipart/form-data">
        @include('trainers.form')
    </form>
@endsection
 
