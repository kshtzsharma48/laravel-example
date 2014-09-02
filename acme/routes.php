<?php

use Acme\Controller\AuthorController;
use Acme\Controller\CommentController;
use Acme\Controller\PostController;
use Acme\Controller\TagController;

$groups = [
  [
    "controller" => AuthorController::class,
    "one"        => "author",
    "many"       => "authors"
  ],
  [
    "controller" => TagController::class,
    "one"        => "tag",
    "many"       => "tags"
  ],
  [
    "controller" => CommentController::class,
    "one"        => "comment",
    "many"       => "comments"
  ],
  [
    "controller" => PostController::class,
    "one"        => "post",
    "many"       => "posts"
  ]
];

foreach ($groups as $group) {
  extract($group);

  Route::group(["prefix" => $many], function () use ($controller, $one) {
    $sub = "{" . $one . "}";

    Route::get("/", [
      "as"   => "{$one}/search",
      "uses" => "{$controller}@search"
    ]);

    Route::get($sub, [
      "as"   => "{$one}/show",
      "uses" => "{$controller}@show"
    ]);

    Route::post("/", [
      "as"   => "{$one}/add",
      "uses" => "{$controller}@add"
    ]);

    Route::patch($sub, [
      "as"   => "{$one}/edit",
      "uses" => "{$controller}@edit"
    ]);

    Route::delete($sub, [
      "as"   => "{$one}/delete",
      "uses" => "{$controller}@delete"
    ]);
  });
}
