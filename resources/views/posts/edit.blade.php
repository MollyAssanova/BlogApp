<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All posts</title>


    </head>
    <body >

    <a href="{{route('posts.index')}}">Go to index Page</a>
     <form action="{{route('posts.update', $post->id)}}" method="post">
         @csrf
         @method('PUT')
         Title<input type="text" name="title" value="{{$post->title}}"><br><br>
         Content:<textarea name="content" cols="40" rows="10">{{$post->content}}</textarea>
         <button type="submit">Update post</button>
     </form>
    </body>
</html>
