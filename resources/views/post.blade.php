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


Post::create([
    "title" => "Judul Ke Kedua",
    "author" => "Second",
    "slug" => "judul-Kedua",
    "excerpt" => "Lorem ipsum dolor elit. Tempora hic sunt culpa vel, Kedua...",
    "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> 
    <p>exercitationem expedita amet architecto deleniti laboriosam soluta maiores magni reprehenderit labore doloribus, officia ipsa, ab, cumque ratione praesentium vero. Enim, placeat?</p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    <p>exercitationem expedita amet architecto deleniti laboriosam soluta maiores magni reprehenderit labore doloribus, officia ipsa, ab, cumque ratione praesentium vero. Enim, placeat?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati atque nostrum ut voluptatem ipsa et eius magnam distinctio modi itaque necessitatibus neque deserunt, consequuntur consequatur excepturi ad. Tempora ut quo ullam porro expedita, a, consectetur et repudiandae nihil totam exercitationem rem officia adipisci libero hic autem optio fuga? Quam maiores doloremque, sit molestias itaque delectus corrupti eum fugiat minima enim hic quaerat quo numquam ipsum obcaecati repellat amet nam voluptatum. Repellat consectetur, officiis aliquid modi eveniet consequatur distinctio sunt sit iure voluptas facilis assumenda nesciunt deserunt voluptatem eligendi impedit mollitia commodi voluptatum eaque? Aut, vitae perspiciatis! Vel similique iure hic placeat maiores neque sunt? Maiores sunt maxime molestias sit qui ea, explicabo earum iure repellendus aspernatur nisi autem nam dolore? Consequatur dolores possimus obcaecati voluptatem. Itaque, aperiam dolorum cumque rerum commodi numquam perferendis doloribus? Nam quam voluptatibus vitae temporibus dolores porro officia consequuntur placeat, dignissimos ipsam nulla alias, rerum dolorum.</p>",
])