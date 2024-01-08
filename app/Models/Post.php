<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
      [
          "title" => "Judul Post Pertama",
          "slug" => "judul-post-pertama",
          "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eius hic, nam sit, reiciendis, libero cum debitis iure incidunt aliquid eveniet perferendis aspernatur distinctio? A, dolor quos nihil corrupti expedita, enim blanditiis eius molestiae veniam repellat sapiente repudiandae deleniti recusandae fuga obcaecati voluptate officiis eaque et commodi voluptas voluptatum libero architecto iure. Culpa omnis officiis quibusdam quasi at asperiores maiores. Repellendus delectus nisi vero. Nobis veritatis omnis quis ea. Commodi aut perspiciatis nostrum! Eligendi unde atque, et animi soluta officiis."
      ], 
      [
          "title" => "Judul Post Kedua",
          "slug" => "judul-post-kedua",
          "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis fugit dicta autem iure saepe sit a id est nam, blanditiis deleniti molestias, numquam possimus provident sed odio officiis! Nemo odit ad necessitatibus ratione dolorem. Hic, velit? Eos quia ex quasi voluptate provident aperiam harum error sit voluptas, repellendus cumque dolorum saepe doloribus quos sunt amet rerum iste maiores assumenda, optio esse ullam blanditiis culpa. Minus voluptates porro officiis hic in culpa eius eligendi, fugit nam voluptate dignissimos? Eius amet cum alias voluptas ratione enim rerum. Neque placeat dolorem quasi natus, facere vel. Corrupti rem cumque, eius repellendus incidunt officia voluptate!"
      ]  
  ];

  public static function all()
  {
    return self::$blog_posts;
  }

  public static function find($slug)
  {
    $posts = self::$blog_posts;
    $post = [];
    foreach ($post as $p) {
        if ($p["slug"] === $slug ) {
            $post = $p;
        }
    }
    return $post;
  }
}
