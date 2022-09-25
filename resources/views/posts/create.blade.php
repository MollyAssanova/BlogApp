<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All posts</title>


    </head>
    <body >

    <a href="{{route('posts.index')}}">Go to index Page</a>
     <form action="{{route('posts.store')}}" method="post">
         @csrf
         Title<input type="text" name="title"><br><br>
         Content:<textarea name="content" cols="40" rows="10"></textarea>
         <button type="submit">Save</button>
     </form>
    </body>
</html>
