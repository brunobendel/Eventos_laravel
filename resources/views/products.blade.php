@extends('layouts.main')
@section('title','Produtos')
@section('content')

<h1>Tela de Produtos</h1>

    {{-- Resgatando parâmetros de URL --}}
    
    @if($busca != '')
    <p>O usuario está buscando por: {{$busca}}</p>
    @endif



@endsection