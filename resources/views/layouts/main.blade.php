<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ricky Blog | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

{{-- Category::create([
  'name' => 'Web Programming',
  'slug' => 'web-programming',
]) --}}

Post::create([
    "title" => "Judul Ke Kedua",
    "category_id" => 1,
    "author" => "Second",
    "slug" => "judul-kedua",
    "excerpt" => "Lorem ipsum dolor elit. Tempora hic sunt culpa vel, Kedua...",
    "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> 
    <p>exercitationem expedita amet architecto deleniti laboriosam soluta maiores magni reprehenderit labore doloribus, officia ipsa, ab, cumque ratione praesentium vero. Enim, placeat?</p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    <p>exercitationem expedita amet architecto deleniti laboriosam soluta maiores magni reprehenderit labore doloribus, officia ipsa, ab, cumque ratione praesentium vero. Enim, placeat?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati atque nostrum ut voluptatem ipsa et eius magnam distinctio modi itaque necessitatibus neque deserunt, consequuntur consequatur excepturi ad. Tempora ut quo ullam porro expedita, a, consectetur et repudiandae nihil totam exercitationem rem officia adipisci libero hic autem optio fuga? Quam maiores doloremque, sit molestias itaque delectus corrupti eum fugiat minima enim hic quaerat quo numquam ipsum obcaecati repellat amet nam voluptatum. Repellat consectetur, officiis aliquid modi eveniet consequatur distinctio sunt sit iure voluptas facilis assumenda nesciunt deserunt voluptatem eligendi impedit mollitia commodi voluptatum eaque? Aut, vitae perspiciatis! Vel similique iure hic placeat maiores neque sunt? Maiores sunt maxime molestias sit qui ea, explicabo earum iure repellendus aspernatur nisi autem nam dolore? Consequatur dolores possimus obcaecati voluptatem. Itaque, aperiam dolorum cumque rerum commodi numquam perferendis doloribus? Nam quam voluptatibus vitae temporibus dolores porro officia consequuntur placeat, dignissimos ipsam nulla alias, rerum dolorum.</p>",
])