@extends('layout')

@section('title')
Criar Artigos
@endsection
@section('content')
<form action="{{ route('artigos.store') }}" method="post">
    @csrf
    <label class="form-label" for="title">Título</label>
    <input class="form-control" type="text" id="title" name="title">
    <label class="form-label" for="body">Mensagem</label>
    <textarea class="form-control" type="text" id="body" name="body"></textarea>
    <div class="row">
        <div class="col">
            <a class="btn btn-danger my-3" href="{{ route('artigos') }}">Cancelar</a>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary my-3" type="submit">Criar</button>
        </div>
    </div>
</form>
@endsection
