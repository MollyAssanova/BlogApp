<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All posts</title>


    </head>
    <body >
    <a href="{{route('posts.create')}}">Go to create Page</a>

    @foreach($posts as $post)
        <a href="{{route('posts.show', $post->id)}}"><h3>{{$post->title}}</h3></a>
        <p>{{$post->content}}</p>


        <form action="{{route('posts.destroy', $post->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach

{{--    <h1>Title 1</h1>--}}
{{--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore enim maiores non numquam, odio perferendis rem totam vero voluptatum.</p>--}}
{{--    <h1>Title 2</h1>--}}
{{--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem itaque iure reiciendis voluptatem. Culpa. .Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore enim maiores non numquam, odio perferendis rem totam vero voluptatum.</p>--}}
{{--    <h1>Title 3</h1>--}}
{{--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore enim maiores non numquam, odio perferendis rem totam vero voluptatum.</p>--}}
{{--    <h1>Title 4</h1>--}}
{{--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore enim maiores non numquam, odio perferendis rem totam vero voluptatum.</p>--}}
{{--    <h1>Title 5</h1>--}}
{{--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur magnam neque optio quaerat rem repudiandae soluta. Consectetur delectus dolore eum numquam quasi reprehenderit similique!.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolore enim maiores non numquam, odio perferendis rem totam vero voluptatum.</p>--}}


    </body>
</html>
