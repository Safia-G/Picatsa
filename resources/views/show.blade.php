@extends('layouts.app')

@section('content')
<main class="container posts article">

    <div class="message status">
       Voici le détail du chat que vous avez selectionné :
    </div>

{{ $chats }}

    <article>
        <img src="" alt="">
        <div class="infos"> legende
       </div>

        <p>description</p>
    </article>

</main>
@endsection
