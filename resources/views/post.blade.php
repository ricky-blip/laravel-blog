@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <h5>Author : {{ $post->author }}</h5>
    {{-- <p>{{ $post->body }}</p> --}}
    {!! $post->body !!}
</article>

<a href="/posts">Back to Posts</a>
    
@endsection


