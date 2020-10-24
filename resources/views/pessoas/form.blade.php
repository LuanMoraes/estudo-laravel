
@extends('template.base')
@section('conteudo')
@section('titulo','Formulário de Pessoa')
  <h1>Formulário de Pessoa</h1>
    @if(isset($pessoa))
      <form action="/pessoas/{{$pessoa->id}}" method="post">
        @method('PUT')
    @else
      <form action="/pessoas" method="post">
    @endif
    @csrf
  <input type="text" name="nome" placeholder="Nome" value="{{$pessoa->nome ?? ''}}">
  <input type="text" name="telefone" placeholder="Telefone" value="{{$pessoa->telefone ?? ''}}">
  <input type="email" name="email" placeholder="Email" value="{{$pessoa->email ?? ''}}">
  <input type="submit" value="Salvar">
  </form>
  <a href="/pessoas">Voltar</a>
@endsection