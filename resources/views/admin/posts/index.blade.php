<a href="{{route('posts.create')}}" title="criar post">Criar novo post</a>
<hr>
@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif
<h1>Página de posts</h1>
@foreach($posts as $post)
<h2>{{$post->title}}</h2>
<p>{{$post->content}} [<a href="{{route('posts.show', $post->id)}}" tittle="ver detalhes">Ver detalhes</a>]</p>
@endforeach
