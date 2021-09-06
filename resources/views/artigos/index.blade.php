@extends('layout')

@section('title')
Artigos
@endsection

@section('content')
<a href="{{ route('artigos.criar') }}" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
    @foreach($artigos as $artigo)
        <li class="list-group-item">
            <div class="row align-middle">
                <div class="col">
                    <h2>{{ $artigo->title }}</h2>
                    <p>{{ $artigo->body }}</p>
                </div>
                <div class="col-4 align-middle">
                    <form action="{{ route('artigos.destroy', $artigo->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        <a href="#" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                    </form>
                </div>
            </div>

        </li>
    @endforeach
</ul>
@endsection
