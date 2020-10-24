
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
  <input class='form-control' type="text" name="nome" placeholder="Nome" value="{{$pessoa->nome ?? ''}}">{{--O required obriga o preenchimento do campo nome--}}
    @error('nome')
        <small class='text-danger'>{{ $message }}</small>
    @enderror
  <input class='form-control' type="text" name="telefone" placeholder="Telefone" value="{{$pessoa->telefone ?? ''}}"> {{--O required obriga o preenchimento do campo telefone--}}
      @error('telefone')
      <small class='text-danger'>{{ $message }}</small>
      @enderror
  <input class='form-control' type="email" name="email" placeholder="Email" value="{{$pessoa->email ?? ''}}">
  <input class='btn btn-primary' type="submit" value="Salvar">
  </form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <a href="/pessoas">Voltar</a>
@endsection