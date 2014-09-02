<?php

namespace Acme;

use Acme\Repository\AuthorRepository;
use Acme\Repository\CommentRepository;
use Acme\Repository\EloquentRepository\AuthorEloquentRepository;
use Acme\Repository\EloquentRepository\CommentEloquentRepository;
use Acme\Repository\EloquentRepository\PostEloquentRepository;
use Acme\Repository\EloquentRepository\TagEloquentRepository;
use Acme\Repository\PostRepository;
use Acme\Repository\TagRepository;
use Acme\Validator\LaravelValidator;
use Acme\Validator\Validator;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind(AuthorRepository::class, AuthorEloquentRepository::class);
    $this->app->bind(PostRepository::class, PostEloquentRepository::class);
    $this->app->bind(TagRepository::class, TagEloquentRepository::class);
    $this->app->bind(CommentRepository::class, CommentEloquentRepository::class);

    $this->app->bind(Validator::class, function () {
      return new LaravelValidator();
    });

    require("filters.php");
    require("routes.php");
  }
}
