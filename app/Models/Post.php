<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Article 1',
                'slug' => 'article-1',
                'author' => 'Azka Zufar Hanif',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum vel quidem laudantium doloribus quibusdam neque non. Architecto voluptate veniam facere, doloremque tempore, distinctio, quam iusto nostrum animi libero fugit commodi!'
            ],
            [
                'id' => 2,
                'title' => 'Article 2',
                'slug' => 'article-2',
                'author' => 'Azka Zufar Hanif',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius nihil praesentium, architecto error eligendi aliquid corporis consequatur reiciendis tenetur facere aliquam repellendus. Ratione minima ut atque ipsum reprehenderit, cum soluta?'
            ]
            ];
    }

    public static function find($slug): array {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
