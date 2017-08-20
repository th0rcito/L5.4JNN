@extends('layouts.app')
@section('title','Pizzas del Usuario')
@section('content')
  <div class="container">
    <p>
      {{link_to_action('PizzaController@create','Crear Pizza',
        [],[])}}||
      {{link_to_action('PizzaController@index','Mis Pizzas',
        [],[])}}
    </p>
    @if (session('message'))
      <div class="alert alert-success">
        {{session('message')}}
      </div>
    @endif

    @forelse ($pizzas as $pizza)
      <div class="panel panel-default">
        <div class="panel-heading">{{ $pizza->name }}</div>
        <div class="body">
          <p>Precio: {{ $pizza->price }}</p>
          {{ $pizza->description}}
        </div>
        <div class="panel-footer">
        </div>
      </div>
    @empty
        <div class="alert alert-danger">
          No existe registro
        </div>
    @endforelse

  </div>

@endsection
