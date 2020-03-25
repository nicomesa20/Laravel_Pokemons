@extends('layouts.app')

@section('title','trainerscreate')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form action="/trainers" class="form-group" method="POST" enctype="multipart/form-data">
        @include('trainers.form')
    </form>
@endsection

