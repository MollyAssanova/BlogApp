<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All posts</title>


</head>
<body >

<a href="{{route('posts.index')}}">Go to index Page</a>
<form action="{{route('comments.update', $comment->id)}}" method="post">
    @csrf
    @method('PUT')
    Content:<textarea name="content" cols="40" rows="10">{{$comment->content}}</textarea>
    <input type="hidden" name="post_id" value="{{$comment->post_id}}">
    <button type="submit">Update comment</button>
</form>
</body>
</html>
