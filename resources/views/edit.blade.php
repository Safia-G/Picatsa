@extends('layouts.app')

@section('content')
<main class="container auth">
    <div class="message error">
      Ajoutez un nouveau chat dans notre base de données :
    </div>
    <form method="POST" action="/chats/storage">
       @csrf
       <label for="libelle">Nom du Chat</label>
        <input type="text" name="legende"/>

        <label for="photo">Photo (url)</label>
        <textarea name="description"></textarea>
        <input type="submit" value="Modifier">
    </form>
</main>

@endsection
