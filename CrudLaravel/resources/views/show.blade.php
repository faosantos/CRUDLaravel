@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        @php
            $user=$book->find($book->id)->relUsers;
        @endphp
        Título: {{$book->title}}<br>
        Páginas: {{$book->pages}}<br>
        Preço: R$ {{$book->price}}<br>
        Autor: {{$user->name}} <br>
        Email do autor: {{$user->email}} <br>
    </div>

    <div class="text-center mt-3 mb-4">
        <a href="{{url("/books")}}">
            <button class="btn btn-success">Voltar</button>
        </a>
    </div>

@endsection