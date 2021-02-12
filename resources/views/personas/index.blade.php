@extends('master')
@section('cuerpo')
Bienvenidos a la vista index
<p> Hola </p>
<p>Adios</p>
<h2>Aqui la solucion de la plantilla</h2>
@stop 
<!-- si o si el stop de la seccion -->
<h1>termina la planilla</h1>
@section('titulo')
- Persona   
<!-- SECCION  DE LA PESTAÑA -->
@stop
@section('pie')
    @parent  
    <!-- parent para traer el mensaje de la herencia -->
    EDICIONES MARVEL
@stop
@section ('styles')
<link rel="stylesheet" type="text/css" href="{{ asset ('style/style.css') }}">
@stop