<h1>Detalhes do Post</h1>
<u>
    <li><strong>Título: </strong>{{$post->title}}</li>
    <li><strong>Conteúdo: </strong>{{$post->content}}</li>
</u>
<form action="{{route('posts.destroy', $post->id)}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Excluir o post</button>
</form>