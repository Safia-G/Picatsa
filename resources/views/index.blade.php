@extends('layouts.app')

@section('content')

<h1>Bonjour</h1>


<main class="container posts articles">
@foreach($chats as $chat)
    <article>
        <img src="" alt="">
        <p><a href=""><img src="{{ $chat->photo }}" alt=""></a></p>
        <p><a href="">{{ $chat->libelle }}</a></p>
        <p><a href="/show">Voir</a></p>
        <p><a href="/edit">Editer</a></p>
        <p><a href="">Supprimer</a></p>

    </article>
@endforeach
</main>
@endsection
