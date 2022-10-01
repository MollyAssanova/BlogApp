<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>All posts</title>
</head>


    <div>
        <a href="{{ route('posts.index')}}">Go to Index Page</a>
    </div>

    <h3>{{$post->title}}</h3>
    <p>{{$post->content}}</p>

    <a href="{{route('posts.edit',$post->id)}}">Edit</a>
    <br><br>

    <form action{{route('comments.store',[$post->id])}} method="post">
        @csrf
        Your comment: <input type="text" name="content" ><Br>
        <input type="hidden" name="post_id" value="{{$post->id}}">

        <button type="submit">Send</button>
    </form>

    @foreach($comment as $com)
        @if($com->post_id==$post->id)
        <p>{{$com->content}}</p>
        <a href="{{route('comments.edit', $com->id)}}">EDIT</a>
        <form action="{{route('comments.destroy',$com->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        @endif
        @endforeach


        </body>
</html>
