<?php

namespace App\Models;

class Post
{
  private static $blog_post = [
    [
      "title" => "Post Pertama",
      "slug" => "Post Pertama",
      "author" => "Yudha Prasetya",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum repudiandae dolore deleniti corporis magni? Nemo, tempora beatae. Cupiditate, voluptate! Ad repellat perferendis nihil temporibus distinctio quas eaque voluptate possimus optio sint? Dolorum explicabo asperiores voluptas voluptates ratione minus sed mollitia deleniti deserunt quo. Deleniti nihil repellat similique sequi. Error.
            "
    ],
    [
      "title" => "Post Kedua",
      "slug" => "Post Kedua",
      "author" => "Yudha Prasetya",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, voluptatum repudiandae dolore deleniti corporis magni? Nemo, tempora beatae. Cupiditate, voluptate! Ad repellat perferendis nihil temporibus distinctio quas eaque voluptate possimus optio sint? Dolorum explicabo asperiores voluptas voluptates ratione minus sed mollitia deleniti deserunt quo. Deleniti nihil repellat similique sequi. Error.
          "
    ]
  ];

  public static function all()
  {
    return collect(self::$blog_post);
  }

  public static function find($slug)
  {
    $posts = static::all();

    return $posts->firstWhere('slug', $slug);
  }
}
