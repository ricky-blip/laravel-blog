<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ricky Rinaldy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi assumenda, odit incidunt vitae blanditiis ea cum dolor maiores omnis deleniti illo sunt rem, sapiente minus quae ipsum, ipsam beatae sed.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis officia libero dolorum ratione nobis. Cum, natus architecto consequuntur, nulla assumenda culpa ratione molestiae quae eum pariatur reiciendis aspernatur. Earum, ex delectus mollitia officia beatae molestiae deleniti nemo nisi ipsum corrupti velit modi deserunt voluptatibus quia suscipit quod tenetur doloribus expedita eaque enim amet iusto voluptate quam? Atque adipisci nisi fugiat unde libero ex iure doloribus molestias officia ab obcaecati, veritatis quisquam architecto suscipit maxime harum tenetur sunt? Eveniet voluptate sequi id omnis quibusdam at accusamus aut est nostrum sunt itaque dolorem optio officia ut quas, nulla eos ea ratione recusandae.",
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts); 
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts -> firstWhere('slug', $slug);
    }
}
