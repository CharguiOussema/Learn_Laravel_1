@extends('layout')
@section('content')
<h1>List of posts</h1>
<ul>
    @forelse($posts as $post)
        <li>
            <h2><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->content }}</p>
            <!-- diffForHumans pour former les date  -->
            <em>{{ $post->created_at->diffForHumans() }}</em>
            <a href="{{ route('posts.edit',['post' => $post->id]) }}">Edit</a>
        </li>
    @empty
        <p>Not posts</p>
    @endforelse
</ul>
@endsection
