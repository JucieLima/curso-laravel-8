@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
@endif
<form action="{{route('posts.store')}}" method="post"">
    <input type="text" name="title" id="title"  value="{{old('title')}} placeholder="Título do post"><br>
    <textarea name="content" id="content" placeholder="digite o conteúdo do post" cols="10" rows="20">{{old('content')}}</textarea>
    <br>
    <button type="submit">Enviar</button>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>