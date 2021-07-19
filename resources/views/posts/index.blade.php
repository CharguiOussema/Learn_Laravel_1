@extends('layout')
@section('content')
<h1>List of posts</h1>
<ul class="list-group">
    @forelse($posts as $post)
        <li>
            <h2><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->content }}</p>
            <!-- diffForHumans pour former les date  -->
            <em>{{ $post->created_at->diffForHumans() }}</em>
            <a class="brn btn-warning" href="{{ route('posts.edit',['post' => $post->id]) }}">Edit</a>

            <form class="form-inline" method="POST" action="{{route('posts.destroy', ['post' => $post->id])}}">
                @csrf
                @method('DELETE')
               <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </li>
    @empty
        <span class="badge badge-danger">Not posts</span>
    @endforelse
</ul>
@endsection
