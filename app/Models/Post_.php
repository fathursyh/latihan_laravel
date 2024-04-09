<?php

namespace App\Models;

class Post
{
    private static $blogPosts = [
        [
            'title' => 'Judul Blog Satu',
            'slug' => 'judul-post-pertama',
            'author' => 'Fathur',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. A officia impedit culpa dolorum totam fugiat perspiciatis iure est, nesciunt dolorem, aliquid iste? Esse harum similique pariatur laudantium explicabo ex magnam blanditiis laboriosam nemo eveniet nulla cum perferendis earum, qui odit ea iure recusandae repellendus, sit mollitia ab quis error? Qui laudantium, aliquam placeat dignissimos ea laboriosam, esse sint aspernatur numquam beatae porro, perferendis dicta sit quasi earum eligendi corporis? Dignissimos perspiciatis quae qui necessitatibus unde velit magni pariatur at doloribus.',
        ],
        [
            'title' => 'Judul Blog Dua',
            'slug' => 'judul-post-kedua',
            'author' => 'Dandy',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam nam ea quos quod optio voluptatem alias, eligendi quo quia ducimus repellat corrupti sit inventore cumque? Animi, aliquid? Porro mollitia nihil accusantium maiores odit quidem veniam quisquam dicta, assumenda praesentium. Autem odit tempora molestiae aspernatur pariatur mollitia, facilis delectus tenetur asperiores corrupti ab nam quae odio libero at omnis alias. Sint debitis suscipit laborum, voluptatem voluptatibus est veniam a. Laboriosam consectetur aspernatur sequi odit, voluptatem qui labore dolores earum autem sed? Ipsum labore hic quasi non, minima quidem at cupiditate itaque reprehenderit facere! Similique minus maiores cupiditate ea exercitationem laboriosam delectus!',
        ]
    ];

    public static function all()
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
