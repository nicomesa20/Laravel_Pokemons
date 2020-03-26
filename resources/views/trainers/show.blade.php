@extends('layouts.app')

@section('title','Trainer')

@section('content')
    <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 10px;" src="/images/{{$trainer->avatar}}" alt="Imagen Avatar" class="card-img-top rounded-circle mx-auto d-block">
    <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem distinctio inventore facilis illum sint aliquam placeat fugiat debitis praesentium totam? Placeat voluptates consectetur modi nostrum beatae, in quibusdam? Aspernatur, quibusdam?</p>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
    <form action="/trainers/{{$trainer->slug}}" method="POST" class="form-group">
        @csrf
        @method('DELETE')
        <button style="margin: 20px 0" type="submit" class="btn btn-danger">Eliminar</button>
    </form>

    </div>
@endsection