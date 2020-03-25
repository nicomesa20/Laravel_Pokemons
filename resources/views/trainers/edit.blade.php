@extends('layouts.app')

@section('title','Trainer Edit')

@section('content')
<form action="/trainers/{{$trainer->slug}}" class="form-group" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('trainers.form')
    </form>
@endsection

