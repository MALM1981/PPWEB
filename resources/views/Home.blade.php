@extends('layout')

@section('Titulo','Home')
@section('TP')
  <h1>Home</h1>
  <p>Le damos la bienvenida a mi blog personal en donde usted encontrará información interesante</p>
  <ul>
	 @foreach($colores as $key)
	     <li> {{ $key['nombre'] }} </li>
	  @endforeach
</ul>
 @endsection